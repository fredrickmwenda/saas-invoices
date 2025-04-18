<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Tag;

class TagTable extends DataTableComponent
{
    protected $model = Tag::class;
    protected string $tableName = 'tags';

    // for table header button
    public $showButtonOnHeader = true;
    public $showFilterOnHeader = false;

    public $buttonComponent = 'tags.components.add-button';

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('created_at', 'desc');
        $this->setQueryStringStatus(false);

    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make('Name')
                ->sortable(),

 
            Column::make(__('messages.common.action'), 'id')
                ->format(function ($value, $row, $column) {
                    return view('livewire.modal-action-button')
                        ->with([
                            'dataId' => $row->id,
                            'editClass' => 'tag-edit-btn',
                            'deleteClass' => 'tag-delete-btn',
                        ]);
                }),
        ];
    }
}
