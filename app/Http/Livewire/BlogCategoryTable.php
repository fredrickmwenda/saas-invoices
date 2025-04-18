<?php

namespace App\Http\Livewire;

use App\Models\BlogCategory;

use Rappasoft\LaravelLivewireTables\Views\Column;

class BlogCategoryTable extends LivewireTableComponent
{
    protected $model = BlogCategory::class;

    protected string $tableName = 'blog_categories';

    // for table header button
    public $showButtonOnHeader = true;

    public $buttonComponent = 'bloging.blogCategory.components.add-button';

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('created_at', 'desc');
        $this->setQueryStringStatus(false);

        $this->setTdAttributes(function (Column $column, $row, $columnIndex, $rowIndex) {
            if (in_array($column->getField(), ['name'])) {
                return [
                    'class' => 'w-50',
                ];
            }

            return [];
        });

        $this->setThAttributes(function (Column $column) {
            if ($column->getField() == 'id') {
                return [
                    'style' => 'width:9%;text-align:center',
                ];
            }

            return [
                'class' => 'text-center',
            ];
        });
    }

    public function columns(): array
    {
        return [
            Column::make(__('messages.category.category'), 'name')
                ->sortable()
                ->searchable(),
            Column::make(__('messages.common.action'), 'id')
                ->format(function ($value, $row, Column $column) {
                    return view('livewire.modal-action-button')
                        ->with([
                            'dataId' => $row->id,
                            'editClass' => 'blog-category-edit-btn',
                            'deleteClass' => 'blog-category-delete-btn', 
                        ]);
                }),
        ];
    }

    // public function builder(): Builder
    // {
    //     return BlogCategory::all(); 
    // }

    public function resetPageTable()
    {
        $this->customResetPage('blogCategoriesPage');
    }
}
