<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\SubService;

class SubServiceTable extends DataTableComponent
{
    protected $model = SubService::class;

    protected string $tableName = 'services';

    public $showButtonOnHeader = true;

    public $buttonComponent = 'services.components.sub-add-button';

   // public $listeners = ['resetPageTable'];

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make(__('Sub Service name'), 'name')
                ->sortable()
                ->searchable(),
            Column::make('Service Name', 'service.name')
                ->sortable()
                ->searchable()->hideIf(1),

            Column::make(__('description'), 'description')
                ->sortable()
                ->searchable(),
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
        $this->customResetPage('quotesPage');
    }
}
