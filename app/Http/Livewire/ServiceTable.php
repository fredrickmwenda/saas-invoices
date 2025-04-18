<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Service;
use Illuminate\Support\Str;

class ServiceTable extends DataTableComponent
{
    protected $model = Service::class;

    protected string $tableName = 'services';

    public $showButtonOnHeader = true;
    public $showFilterOnHeader = false;


    public $buttonComponent = 'services.service.components.add-button';
    public $listeners = [ 'resetPageTable'];



    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make(__('name'), 'name')
                ->sortable()
                ->searchable(),
            Column::make(__('description'), 'description')
                ->sortable()
                ->searchable()
                ->format(function($value) {
                    return Str::limit($value, 100, '...');
                }),
            Column::make(__('price'), 'price')
                ->sortable()
                ->searchable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }

    public function resetPageTable()
    {
        $this->customResetPage('servicesPage');
    }
}
