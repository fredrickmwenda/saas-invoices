<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class BlogTable extends LivewireTableComponent
{
    protected $model = Blog::class;

    protected string $tableName = 'blogs';

    // for table header button
    public $showButtonOnHeader = true;

    public $buttonComponent = 'bloging.blog.components.add-button';

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('created_at', 'desc');
        $this->setQueryStringStatus(false);

        $this->setTdAttributes(function (Column $column, $row, $columnIndex, $rowIndex) {
            if (in_array($column->getField(), ['title', 'tags', 'category.name'])) {
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
            Column::make(__('blog.title'), 'title')
                ->sortable()
                ->searchable(),
            
            
            Column::make(__('blog.category'), 'category.name')->sortable(),

            Column::make(__('blog.created_at'), 'created_at') // Assuming 'created_at' is a column in the 'blogs' table
                ->sortable(), // Adjust the label to your preference
            

            Column::make(__('messages.common.action'), 'id')
                ->format(function ($value, $row, $column) {
                    return view('livewire.modal-action-button')
                        ->with([
                            'dataId' => $row->id,
                            'editClass' => 'blog-edit-btn',
                            'deleteClass' => 'blog-delete-btn',
                        ]);
                }),
        ];
    }

    public function builder(): Builder
    {
        return Blog::with('category', 'tags'); // Assuming you have relationships set up in your Blog model
    }

    public function resetPageTable()
    {
        $this->customResetPage('blogsPage');
    }
}
