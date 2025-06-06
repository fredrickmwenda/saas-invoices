<?php

namespace App\Http\Livewire;

use App\Models\SubscriptionPlan;
use Illuminate\Support\Str;
use Livewire\Component;
use Rappasoft\LaravelLivewireTables\Views\Column;

class SubscriptionPlanTable extends LivewireTableComponent
{
    protected $model = SubscriptionPlan::class;

    protected string $tableName = 'subscription_plans';

    public $showButtonOnHeader = true;
    public bool $showFilterOnHeader = false;
    public $buttonComponent = 'subscriptions.subscription-plan.components.add-button';
    public $listeners = ['resetPageTable', 'refreshTable' => '$refresh'];

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make(__('Name'), 'name')
                ->sortable()
                ->searchable(),
            Column::make(__('Description'), 'description')
                ->sortable()
                ->searchable()
                ->format(function ($value) {
                    return Str::limit($value, 100, '...');
                }),
            Column::make(__('Currency'), 'currency')
                ->sortable()
                ->searchable(),
            Column::make(__('Price'), 'price')
                ->sortable()
                ->searchable()
                ->format(function ($value) {
                    return '$' . number_format($value, 2);
                }),
            Column::make(__('Features'), 'features')
                ->format(function ($value) {
                    $features = json_decode($value, true);
                    return $features ? implode(', ', $features) : 'N/A';
                }),
            Column::make(__('Duration'), 'duration')
                ->sortable()
                ->searchable(),
            Column::make(__('Duration Unit'), 'duration_unit')
                ->sortable()
                ->searchable(),
            Column::make(__('Trial Period'), 'trial_period')
                ->sortable()
                ->searchable(),
            Column::make(__('Trial Period Unit'), 'trial_period_unit')
                ->sortable()
                ->searchable(),
            Column::make(__('Status'), 'status')
                ->sortable()
                ->format(function ($value) {
                    return ucfirst($value);
                }),
            // Number of subscriptions in this plan by connectiong to subscription model from subscription_plan
            Column::make(__('Subscriptions'), 'subscriptions_count')
                ->sortable()
                ->searchable()
                ->format(function ($value) {
                    return $value ? $value : 0;
                }),
            Column::make("Created At", "created_at")
                ->sortable(),
            Column::make("Updated At", "updated_at")
                ->sortable(),
        ];
    }

    public function toggleActive($id)
    {
        $plan = SubscriptionPlan::find($id);
        if ($plan) {
            $plan->is_active = !$plan->is_active;
            $plan->save();
            $this->emit('refreshTable');
        }
    }


    public function resetPageTable()
    {
        $this->customResetPage('subscriptionPlansPage');
    }

}