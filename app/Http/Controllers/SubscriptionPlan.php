<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubscriptionPlanRequest;
use App\Repositories\SubscriptionPlanRepository;
use Illuminate\Http\Request;

class SubscriptionPlan extends Controller
{
    // create subscription plans
    // subscribe a tenant to a plan
    // update subscription plans
    // cancel subscription plans
    // get all subscription plans
    // get all subscription plans for a tenant
    // get all subscriptions for a tenant
    //renew a subscription for a tenant
    //change a subscription plan for a tenant

    private $subscriptionPlanRepository;
    public function __construct(SubscriptionPlanRepository $subscriptionPlanRepo)
    {
        $this->subscriptionPlanRepository = $subscriptionPlanRepo;
    }
    /**
     * Display a listing of the SubscriptionPlan.
     * GET|HEAD /subscription-plans
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        $subscriptionPlans = $this->subscriptionPlanRepository->all();
        return response()->json($subscriptionPlans);
    }

    /**
     * Show the form for creating a new SubscriptionPlan.
     * GET|HEAD /subscription-plans/create
     *
     * @return JsonResponse
     */
 

    /**
     * Store a newly created SubscriptionPlan in storage.
     * POST /subscription-plans
     *
     * @param CreateSubscriptionPlanRequest $request
     *
     * @return JsonResponse
     */
    public function store(CreateSubscriptionPlanRequest $request)
    {
        $input = $request->all();
        $subscriptionPlan = $this->subscriptionPlanRepository->store($input);
        return response()->json($subscriptionPlan);
    }

     /**
         * Bulk Action with Enable, Disable and Delete
         *
         * @param Request $request
         *
         * @return JsonResponse
         * @throws AuthorizationException
         */

         public function batchAction(Request $request): JsonResponse
         {
 
             if (config('app.stage') == 'demo') {
                 return response()->json([
                     'status'  => 'error',
                     'message' => 'Sorry! This option is not available in demo mode',
                 ]);
             }
 
             $action = $request->get('action');
             $ids    = $request->get('ids');
 
 
             switch ($action) {
                 case 'cancel':
                     $this->authorize('manage subscription');
 
                     $this->subscriptions->batchCancel($ids);
 
                     return response()->json([
                         'status'  => 'success',
                         'message' => __('locale.subscription.subscriptions_cancelled'),
                     ]);
 
                 case 'delete':
                     $this->authorize('delete subscription');
 
                     $this->subscriptions->batchDelete($ids);
 
                     return response()->json([
                         'status'  => 'success',
                         'message' => __('locale.subscription.subscriptions_deleted'),
                     ]);
 
             }
 
             return response()->json([
                 'status'  => 'error',
                 'message' => __('locale.exceptions.invalid_action'),
             ]);
 
         }
}
