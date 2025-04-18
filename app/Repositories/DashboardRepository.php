<?php

namespace App\Repositories;

use App\Models\Client;
use App\Models\Invoice;
use App\Models\Payment;
use App\Models\Product;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/**
 * Class DashboardRepository
 */
class DashboardRepository
{
    public function getFieldsSearchable()
    {
        // TODO: Implement getFieldsSearchable() method.
    }

    public function model(): string
    {
        return Dashboard::class;
    }

    // public function getDashboardData(): array
    // {
    //     $currentMonth = now()->startOfMonth();
    //     $previousMonth = now()->subMonth()->startOfMonth();

    //     $currentMonthInvoices = Invoice::


    //     $invoice = Invoice::all();
    //     $data['total_invoices'] = $invoice->count();
    //     $data['total_clients'] = Client::count();
    //     $data['total_products'] = Product::count();
    //     $data['paid_invoices'] = $invoice->where('status', Invoice::PAID)->count();
    //     $data['unpaid_invoices'] = $invoice->where('status', Invoice::UNPAID)->count();
    //     $data['partially_paid'] = $invoice->where('status', Invoice::PARTIALLY)->count();
    //     $data['overdue_invoices'] = $invoice->where('status', Invoice::OVERDUE)->count();

    //     return $data;
    // }
    public function getDashboardData(): array
    {
        // Get current and previous month
        $currentMonth = now()->startOfMonth();
        $previousMonth = now()->subMonth()->startOfMonth();
    
        // Get invoices for the current and previous month
        $currentMonthInvoices = Invoice::whereBetween('created_at', [$currentMonth, now()])->get();
        $previousMonthInvoices = Invoice::whereBetween('created_at', [$previousMonth, $currentMonth->subSecond()])->get();


        //Get Clients for current and Previous Month
        $currentMonthClients = Client::whereBetween('created_at', [$currentMonth, now()])->get();
        $previousMonthClients = Client::whereBetween('created_at', [$previousMonth,$currentMonth->subSecond() ])->get();
    
        // Totals invoices for the current month
        $totalCurrentInvoices = $currentMonthInvoices->count();
        $paidCurrentInvoices = $currentMonthInvoices->where('status', Invoice::PAID)->count();
        $unpaidCurrentinvoices = $currentMonthInvoices->where('status', Invoice::UNPAID)->count();
        $partiallyCurrentInvoices = $currentMonthInvoices->where('status', Invoice::PARTIALLY)->count();
        $overdueCurrentinvoices = $currentMonthInvoices->where('status', Invoice::OVERDUE)->count();
    
        //Total Clients for the current Month
        $totalCurrentClients = $currentMonthClients->count();

        
        // Totals for the previous month
        $previousTotalInvoices = $previousMonthInvoices->count();
        $previousPaidInvoices = $previousMonthInvoices->where('status', Invoice::PAID)->count();
        $previousUnpaidInvoices = $previousMonthInvoices->where('status', Invoice::UNPAID)->count();
        $previousPartiallyPaid = $previousMonthInvoices->where('status', Invoice::PARTIALLY)->count();
        $previousOverdueInvoices = $previousMonthInvoices->where('status', Invoice::OVERDUE)->count();
    
        //Previous Clients for the current Month
        $previousTotalClients = $previousMonthClients->count();
        // Calculate percentage change
        $data['invoice_percentage_change'] = $this->calculatePercentageChange($previousTotalInvoices, $totalCurrentInvoices);
        $data['paid_invoices_percentage_change'] = $this->calculatePercentageChange($previousPaidInvoices, $paidCurrentInvoices);
        $data['unpaid_invoices_percentage_change'] = $this->calculatePercentageChange($previousUnpaidInvoices, $unpaidCurrentinvoices);
        $data['partially_paid_percentage_change'] = $this->calculatePercentageChange($previousPartiallyPaid, $partiallyCurrentInvoices);
        $data['overdue_invoices_percentage_change'] = $this->calculatePercentageChange($previousOverdueInvoices, $overdueCurrentinvoices);
        $data['client_percentage_change'] = $this->calculatePercentageChange($previousTotalClients, $totalCurrentClients);
    
        // Get other data
        //All clients
        $data['total_clients'] = Client::count();
        $data['total_products'] = Product::count();
        $invoice = Invoice::all();
        $data['total_invoices'] = $invoice->count();
        $data['paid_invoices'] = $invoice->where('status', Invoice::PAID)->count();
        $data['unpaid_invoices'] = $invoice->where('status', Invoice::UNPAID)->count();
        $data['partially_paid'] = $invoice->where('status', Invoice::PARTIALLY)->count();
        $data['overdue_invoices'] = $invoice->where('status', Invoice::OVERDUE)->count();
    
        //dd($data);
        return $data;
    }
    
    /**
     * Calculate percentage change between two values
     */
    private function calculatePercentageChange($previous, $current)
    {
        if ($previous == 0 && $current == 0) {
            return 0;
        }
    
        if ($previous == 0) {
            return $current > 0 ? 100 : 0;
        }
    
        return (($current - $previous) / $previous) * 100;
    }
    

   

    public function getClientDashboardData(): array
    {
        $user = getLogInUser();
        $invoice = Invoice::where('client_id', $user->client->id)->where('status', '!=', Invoice::DRAFT)->get();
        $data['total_invoices'] = $invoice->count();
        $data['total_products'] = Product::count();
        $data['paid_invoices'] = $invoice->where('status', Invoice::PAID)->count();
        $data['unpaid_invoices'] = $invoice->where('status', Invoice::UNPAID)->count();

        return $data;
    }

    public function getPaymentOverviewData(): array
    {
        $data = [];
        $invoice = Invoice::all();
        $data['total_records'] = $invoice->count();
        $data['received_amount'] = Payment::sum('amount');
        $data['invoice_amount'] = $invoice->where('status', '!=', Invoice::DRAFT)->sum('final_amount');
        $data['due_amount'] = $data['invoice_amount'] - $data['received_amount'];
        $data['labels'] = [
            __('messages.received_amount'),
            __('messages.invoice.due_amount'),
        ];
        $data['dataPoints'] = [$data['received_amount'], $data['due_amount']];

        return $data;
    }

    public function getInvoiceOverviewData(): array
    {
        $data = [];
        $invoice = Invoice::all();
        $data['total_paid_invoices'] = $invoice->where('status', Invoice::PAID)->count();
        $data['total_unpaid_invoices'] = $invoice->where('status', Invoice::UNPAID)->count();
        $data['total_partial_invoices'] = $invoice->where('status', Invoice::PARTIALLY)->count();
        $data['total_overdue_invoices'] = $invoice->where('status', Invoice::OVERDUE)->count();
    
        $labels = [
            __('messages.paid_invoices'),
            __('messages.unpaid_invoices'),
            'Overdue Invoices',
            'Partial Invoices',
        ];
    
        $dataPoints = [
            $data['total_paid_invoices'],
            $data['total_unpaid_invoices'],
            $data['total_partial_invoices'],
            $data['total_overdue_invoices'],
        ];
    
        // Filter out 0 values along with corresponding labels
        $filteredData = [];
        foreach ($dataPoints as $key => $value) {
            if ($value > 0) {
                $filteredData['labels'][] = $labels[$key];
                $filteredData['dataPoints'][] = $value;
            }
        }
    
        return $filteredData;
    }
    

    public function prepareYearlyIncomeChartData($input): array
    {
        $start_date = Carbon::parse($input['start_date'])->format('Y-m-d');
        $end_date = Carbon::parse($input['end_date'])->format('Y-m-d');

        $income = Payment::whereIsApproved(Payment::APPROVED)->whereBetween('payment_date',
            [date($start_date), date($end_date)])
            ->selectRaw('DATE_FORMAT(payment_date,"%b %d") as month,SUM(amount) as total_income')
            ->groupBy('month')
            ->orderBy('month')
            ->get()
            ->keyBy('month');

        $period = CarbonPeriod::create($start_date, $end_date);
        $labelsData = array_map(function ($datePeriod) {
            return $datePeriod->format('M d');
        }, iterator_to_array($period));

        $incomeOverviewData = array_map(function ($datePeriod) use ($income) {
            $month = $datePeriod->format('M d');

            return $income->has($month) ? $income->get($month)->total_income : 0;
        }, iterator_to_array($period));

        $data['labels'] = $labelsData;
        $data['yearly_income'] = $incomeOverviewData;

        return $data;
    }

    public function getAdminCurrencyData()
    {
        if (getLogInUser()->hasRole('client')) {
            $invoice = Invoice::whereClientId(getLogInUser()->client->id);
        } else {
            $invoice = Invoice::query();
        }

        $totalInvoices = $invoice->where('status', '!=', Invoice::DRAFT)
                                ->get()
                                ->groupBy('currency_id');
        $invoiceIds = $invoice->pluck('id')->toArray();

        $paidInvoices = Payment::with('invoice')->where(function ($q) {
            $q->where('payment_mode', Payment::MANUAL)
                ->where('is_approved', Payment::APPROVED);
            $q->orWhere('payment_mode', '!=', Payment::MANUAL);
        })->whereIn('invoice_id', $invoiceIds)
                                ->get()
                                ->groupBy('invoice.currency_id');

        $totalInvoiceAmountArr = [];
        $paidInvoicesArr = [];
        $dueInvoicesArr = [];
        $defaultCurrencyId = getSettingValue('current_currency');

        foreach ($totalInvoices as $currencyId => $totalInvoice) {
            if (empty($currencyId)) {
                $totalInvoiceAmountArr[$defaultCurrencyId] = $totalInvoice->sum('final_amount');
            } else {
                $totalInvoiceAmountArr[$currencyId] = $totalInvoice->sum('final_amount');
            }
        }

        foreach ($paidInvoices as $currencyId => $paidInvoice) {
            if (empty($currencyId)) {
                $paidInvoicesArr[$defaultCurrencyId] = $paidInvoice->sum('amount');
                $dueInvoicesArr[$defaultCurrencyId] = $totalInvoiceAmountArr[$defaultCurrencyId] - $paidInvoice->sum('amount');
            } else {
                $paidInvoicesArr[$currencyId] = $paidInvoice->sum('amount');
                $dueInvoicesArr[$currencyId] = $totalInvoiceAmountArr[$currencyId] - $paidInvoice->sum('amount');
            }
        }

        ksort($totalInvoiceAmountArr);
        ksort($paidInvoicesArr);
        ksort($dueInvoicesArr);
        $data['totalInvoices'] = $totalInvoiceAmountArr;
        $data['paidInvoices'] = $paidInvoicesArr;
        $data['dueInvoices'] = $dueInvoicesArr;

        return $data;
    }
}
