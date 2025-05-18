<?php

namespace App\Repositories;


use App\Models\SubscriptionPlan;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

/**
 * Class SubscriptionPlanRepository
 *
 * 
 */
class SubscriptionPlanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected array $fieldSearchable = [
        'name',
        'price',
        'interval',
        'interval_count',
        'trial_period_days',
        'status',
        'description',
        'currency',

    ];

    /**
     * Return searchable fields
     */
    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model(): string
    {
        return SubscriptionPlan::class;

    }

    /**
     * @param array $input
     * @return SubscriptionPlan
     * @throws Exception
     */
    public function store(array $input): SubscriptionPlan
    {
        try {
            DB::beginTransaction();
            $input['status'] = SubscriptionPlan::STATUS_ACTIVE;
            $input['currency'] = Arr::get($input, 'currency', config('app.default_currency'));
            $subscriptionPlan = parent::create($input);
            DB::commit();
            return $subscriptionPlan;
        } catch (Exception $e) {
            DB::rollBack();
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }

    /**
     * @param array $input
     * @param SubscriptionPlan $subscriptionPlan
     * @return SubscriptionPlan
     * @throws Exception
     */
    public function updateSubscriptionPlan(array $input, SubscriptionPlan $subscriptionPlan): SubscriptionPlan
    {
        try {
            DB::beginTransaction();
            $input['currency'] = Arr::get($input, 'currency', config('app.default_currency'));
            $subscriptionPlan = parent::update($input, $subscriptionPlan->id);
            DB::commit();
            return $subscriptionPlan;
        } catch (Exception $e) {
            DB::rollBack();
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }


    /**
     * @param int $id
     * @return bool
     * @throws Exception
     */
    public function deleteSubscriptionPlan(int $id): bool
    {
        try {
            DB::beginTransaction();

            $subscriptionPlan = $this->find($id); // Assuming `find` is implemented in BaseRepository
            if (!$subscriptionPlan) {
                throw new UnprocessableEntityHttpException('Subscription Plan not found.');
            }

            $subscriptionPlan->delete();

            DB::commit();
            return true;
        } catch (Exception $e) {
            DB::rollBack();
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }

    // batch delete subscription plans
    public function batchDelete(array $ids): bool
    {
        try {
            DB::beginTransaction();
            foreach ($ids as $id) {
                $subscriptionPlan = $this->find($id);
                if ($subscriptionPlan) {
                    $subscriptionPlan->delete();
                }
            }
            DB::commit();
            return true;
        } catch (Exception $e) {
            DB::rollBack();
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }

    //batch make active or inactive
    public function batchUpdateStatus(array $ids, string $status): bool
    {
        try {
            DB::beginTransaction();
            foreach ($ids as $id) {
                $subscriptionPlan = $this->find($id);
                if ($subscriptionPlan) {
                    $subscriptionPlan->update(['status' => $status]);
                }
            }
            DB::commit();
            return true;
        } catch (Exception $e) {
            DB::rollBack();
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }

    // update status of subscription plan
    public function updateStatus(int $id, string $status): bool
    {
        try {
            DB::beginTransaction();
            $subscriptionPlan = $this->find($id);
            if ($subscriptionPlan) {
                $subscriptionPlan->update(['status' => $status]);
            }
            DB::commit();
            return true;
        } catch (Exception $e) {
            DB::rollBack();
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }


}
