<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateSubscriptionPlanRequest;
use App\Repositories\SubscriptionPlanRepository;
use Exception;

class SubscriptionPlanController extends Controller
{
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
        // $subscriptionPlans = $this->subscriptionPlanRepository->all();
        return view('subscriptions.index');
    }


    // list subscription plans in card view
    public function listSubscriptionPlans(Request $request)
    {
        $subscriptionPlans = $this->subscriptionPlanRepository->all();
        return view('subscriptions.list', compact('subscriptionPlans'));
    }

    /**
     * Show the form for creating a new SubscriptionPlan.
     * GET|HEAD /subscription-plans/create
     *
     * @return JsonResponse
     */
    public function create()
    {
        return view('subscriptions.create');
    }

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
     * Display the specified SubscriptionPlan.
     * GET|HEAD /subscription-plans/{id}
     *
     * @param int $id
     *
     * @return JsonResponse
     */
    public function show($id)
    {
        $subscriptionPlan = $this->subscriptionPlanRepository->find($id);
        if (empty($subscriptionPlan)) {
            return response()->json(['message' => 'Subscription Plan not found'], 404);
        }
        return response()->json($subscriptionPlan);
    }

    // update subscription plan
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $subscriptionPlan = $this->subscriptionPlanRepository->updateSubscriptionPlan($input, $id);
        return response()->json($subscriptionPlan);
    }
    // delete subscription plan
    public function destroy($id)
    {

        try {
            $this->subscriptionPlanRepository->deleteSubscriptionPlan($id);
            return response()->json(['message' => 'Subscription Plan deleted successfully']);
        } catch (Exception $e) {
            return response()->json(['message' => 'Error deleting Subscription Plan: ' . $e->getMessage()], 500);
        }
    }

        /**
     * Bulk Action with Enable, Disable and Delete
     *
     * @param Request $request
     *
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function bulkAction(Request $request)
    {
        $this->authorize('subscriptionPlan.bulkAction');
        $action = $request->get('action');
        $ids = $request->get('ids');

        if (empty($ids)) {
            return response()->json(['message' => 'No Subscription Plan selected'], 400);
        }
        //update the status of the subscription plan or delete the subscription plan
        switch ($action) {
            case 'enable':
                $this->subscriptionPlanRepository->batchUpdateStatus($ids, 'active');
                break;
            case 'disable':
                $this->subscriptionPlanRepository->batchUpdateStatus($ids, 'active');
                break;
            case 'delete':
                $this->subscriptionPlanRepository->batchDelete($ids);
                break;
            default:
                return response()->json(['message' => 'Invalid action'], 400);
        }

        return response()->json(['message' => 'Bulk action completed successfully']);
    }

    // change the status of the subscription plan
    public function changeStatus(Request $request, $id)
    {
        $this->authorize('subscriptionPlan.changeStatus');
        $status = $request->get('status');
        $this->subscriptionPlanRepository->updateStatus($id, $status);
        return response()->json(['message' => 'Subscription Plan status updated successfully']);
    }
}
