<?php

namespace App\Http\Livewire;

use App\Models\Invoice; // Model representing the Invoice table
use App\Models\User; // Model representing the User table
use Illuminate\Database\Eloquent\Builder; // Used for building dynamic queries
use Illuminate\Support\Facades\Auth; // Used to fetch the authenticated user
use Rappasoft\LaravelLivewireTables\Views\Column; // Library that handles column definitions for Livewire tables

class InvoiceTable extends LivewireTableComponent
{
    // The model associated with this component (Invoice model)
    protected $model = Invoice::class;

    // Name of the table in the database
    protected string $tableName = 'invoices';

    // Display a button on the header of the table
    public $showButtonOnHeader = true;

    // The Blade component for the "Add Button"
    public $buttonComponent = 'invoices.components.add-button';

    // Enables filters to be shown on the table header
    public bool $showFilterOnHeader = true;

    // The Blade component for filters and the status arrays to filter by
    public $filterComponent = ['invoices.components.filter', Invoice::STATUS_ARR, Invoice::RECURRING_STATUS_ARR];

    // Defines the Livewire events this component listens to
    public $listeners = ['changeInvoiceStatusFilter', 'changeRecurringStatusFilter', 'resetPageTable'];

    // Default status filter (all statuses)
    public $status = Invoice::STATUS_ALL;

    // Default recurring status filter (empty, meaning no filter applied initially)
    public $recurringStatus = '';

    // Links the `status` variable to the query string in the URL
    protected $queryString = ['status'];

    /**
     * Configure the table settings
     */
    public function configure(): void
    {
        // Set the primary key for the table
        $this->setPrimaryKey('id');
        
        // Default sorting for the table (sort by `created_at` column in descending order)
        $this->setDefaultSort('created_at', 'desc');

        // Disable query string syncing for status
        $this->setQueryStringStatus(false);

        // Define the <th> (table header) attributes for specific columns
        $this->setThAttributes(function (Column $column) {
            // If the column is 'final_amount', align it to the right
            if ($column->isField('final_amount')) {
                return ['class' => 'd-flex justify-content-end'];
            }
            // If the column is 'amount', align it to the right
            if ($column->isField('amount')) {
                return ['class' => 'text-end'];
            }
            // Default alignment for other columns (centered)
            return ['class' => 'text-center'];
        });

        // Define the <td> (table cell) attributes for specific columns
        $this->setTdAttributes(function (Column $column, $row, $columnIndex, $rowIndex) {
            // If the column is 'status' or 'id', align it to the center
            if (in_array($column->getField(), ['status', 'id'])) {
                return ['class' => 'text-center'];
            }
            // If the column is 'amount' or 'final_amount', align it to the right
            if (in_array($column->getField(), ['amount', 'final_amount'])) {
                return ['class' => 'text-end'];
            }
            // No specific alignment for other columns
            return [];
        });
    }

    /**
     * Define the columns that will appear in the table
     */
    public function columns(): array
    {
        return [
            // Column for client first name (sortable, searchable, uses a custom view)
            Column::make(__('messages.invoice.client'), 'client.first_name')
                ->sortable()
                ->searchable()
                ->view('invoices.components.client-name'),
                
            // Hidden column for the invoice ID
            Column::make('invoice_id', 'invoice_id')
                ->sortable()
                ->searchable()->hideIf(1),

            // Hidden column for client last name
            Column::make('Last Name', 'client.last_name')
                ->sortable()
                ->searchable()->hideIf(1),

            // Column for the invoice date (sortable, searchable, formatted via a custom view)
            Column::make(__('messages.invoice.invoice_date'), 'invoice_date')
                ->sortable()
                ->searchable()
                ->format(function ($value, $row, Column $column) {
                    return view('invoices.components.invoice-due-date')
                        ->withValue([
                            'invoice-date' => $row->invoice_date,
                        ]);
                }),

            // Column for the invoice due date (similar formatting as above)
            Column::make(__('messages.invoice.due_date'), 'due_date')
                ->sortable()
                ->searchable()
                ->format(function ($value, $row, Column $column) {
                    return view('invoices.components.invoice-due-date')
                        ->withValue([
                            'due-date' => $row->due_date,
                        ]);
                }),

            // Column for the final amount (uses a custom view for displaying the amount)
            Column::make(__('messages.invoice.amount'), 'final_amount')
                ->sortable()
                ->searchable()
                ->view('invoices.components.amount'),

            // Column for the transaction amount (uses a custom view)
            Column::make(__('messages.invoice.transactions'), 'amount')
                ->searchable()
                ->view('invoices.components.transaction'),

            // Column for the status (uses a custom view for status display)
            Column::make(__('messages.common.status'), 'status')
                ->searchable()
                ->view('invoices.components.transaction-status'),

            // Column for the action buttons (custom view for actions)
            Column::make(__('messages.common.action'), 'id')
                ->view('livewire.invoice-action-button'),
        ];
    }

    /**
     * Build the query for fetching the table data
     */
    public function builder(): Builder
    {
        // Start building the query for fetching invoices, including related data (client's user media and payments)
        $query = Invoice::with(['client.user.media', 'payments'])->select('invoices.*')
            // Apply status filter if it's not empty and not set to show all statuses
            ->when($this->status != '' && $this->status != Invoice::STATUS_ALL, function ($query) {
                return $query->where('invoices.status', $this->status);
            })
            // Apply recurring status filter if it's not empty
            ->when($this->recurringStatus != '', function ($query) {
                return $query->where('invoices.recurring_status', $this->recurringStatus);
            });

        /** @var User $user */
        // Fetch the authenticated user
        $user = Auth::user();
        
        // If the user is a client, exclude draft invoices from the result set
        if ($user->hasRole(\App\Models\Role::ROLE_CLIENT)) {
            $query->where('invoices.status', '!=', Invoice::DRAFT);
        }

        return $query;
    }

    /**
     * Update the status filter when it's changed
     */
    public function changeInvoiceStatusFilter($status)
    {
        $this->status = $status;
        // Rebuild the query with the new status filter
        $this->setBuilder($this->builder());
    }

    /**
     * Update the recurring status filter when it's changed
     */
    public function changeRecurringStatusFilter($recurringStatus)
    {
        $this->recurringStatus = $recurringStatus;
        // Rebuild the query with the new recurring status filter
        $this->setBuilder($this->builder());
    }

    /**
     * Reset the table pagination when needed
     */
    public function resetPageTable()
    {
        // Reset the page to the first one, specifically for the 'invoicesPage' pagination
        $this->customResetPage('invoicesPage');
    }
}
