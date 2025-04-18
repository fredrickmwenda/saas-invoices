    @extends('layouts.app')
    @section('title')
    {{ __('messages.dashboard') }}
    @endsection
    @section('content')

    <div class="d-flex flex-column">
        @include('flash::message')
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="card bg-white border-0 rounded-3 mb-4">
                    <div class="card-body p-4" style="padding-bottom: 0 !important;">
                        <div class="mb-3 mb-lg-4">
                            <h3 class="mb-0">Company Overview</h3>
                        </div>
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-sm-6">
                                <div class="card bg-primary bg-opacity-10 border-primary border-opacity-10 rounded-3 mb-4 stats-box style-three">
                                    <div class="card-body p-4">
                                        <div class="d-flex align-items-center mb-19">
                                            <div class="flex-shrink-0">
                                                <i class="material-symbols-outlined fs-40 text-primary">person</i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <span>Total Clients</span>
                                                <h3 class="fs-20 mt-1 mb-0">{{ formatTotalAmount($total_clients) }}</h3>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between flex-wrap gap-2 align-items-center">
                                            <span class="fs-12">Clients this month</span>
                                            @if($client_percentage_change > 0)
                                            <span class="count up fw-medium ms-0">+{{$client_percentage_change}}%</span>
                                            @elseif($client_percentage_change < 0)
                                                <span class="count down fw-medium ms-0">-{{$client_percentage_change}}%</span>
                                                @else
                                                <span class="fw-medium ms-0">Add Data</span>
                                                @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-sm-6">
                                <div class="card bg-danger bg-opacity-10 border-danger border-opacity-10 rounded-3 mb-4 stats-box style-three">
                                    <div class="card-body p-4">
                                        <div class="d-flex align-items-center mb-19">
                                            <div class="flex-shrink-0">
                                                <i class="material-symbols-outlined fs-40 text-danger">stacks</i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <span>Total Invoices</span>
                                                <h3 class="fs-20 mt-1 mb-0">{{$total_invoices}} </h3>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between flex-wrap gap-2 align-items-center">
                                            <span class="fs-12">Invoices this month</span>
                                            @if($invoice_percentage_change > 0)
                                            <span class="count up fw-medium ms-0">+{{$invoice_percentage_change}}%</span>
                                            @elseif($invoice_percentage_change < 0)
                                                <span class="count down fw-medium ms-0">-{{$invoice_percentage_change}}%</span>
                                                @else
                                                <span class="fw-medium ms-0">Add Data</span>
                                                @endif


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-sm-6">
                                <div class="card bg-success bg-opacity-10 border-success border-opacity-10 rounded-3 mb-4 stats-box style-three">
                                    <div class="card-body p-4">
                                        <div class="d-flex align-items-center mb-19">
                                            <div class="flex-shrink-0">
                                                <i class="material-symbols-outlined fs-40 text-success">assignment_turned_in</i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <span>Paid Invoices</span>
                                                <h3 class="fs-20 mt-1 mb-0">{{ formatTotalAmount($paid_invoices) }}</h3>
                                            </div>
                                        </div>
                                        <!-- <div class="d-flex justify-content-between flex-wrap gap-2 align-items-center">
                                            <span class="fs-12">Paid Invoices this month</span>
                                            <span class="count down fw-medium ms-0">-15%</span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-3 col-xl-3 col-sm-6">
                                <div class="card bg-success bg-opacity-10 border-success border-opacity-10 rounded-3 mb-4 stats-box style-three">
                                    <div class="card-body p-4">
                                        <div class="d-flex align-items-center mb-19">
                                            <div class="flex-shrink-0">
                                                <i class="material-symbols-outlined fs-40 text-info">assignment_returned</i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <span>Partial Invoices</span>
                                                <h3 class="fs-20 mt-1 mb-0">{{ formatTotalAmount($partially_paid) }}</h3>
                                            </div>
                                        </div>
                                        <!-- <div class="d-flex justify-content-between flex-wrap gap-2 align-items-center">
                                            <span class="fs-12">Projects this month</span>
                                            <span class="count down fw-medium ms-0">-15%</span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-3 col-xl-3 col-sm-6">
                                <div class="card bg-success bg-opacity-10 border-success border-opacity-10 rounded-3 mb-4 stats-box style-three">
                                    <div class="card-body p-4">
                                        <div class="d-flex align-items-center mb-19">
                                            <div class="flex-shrink-0">
                                                <i class="material-symbols-outlined fs-40 text-warning">assignment_return</i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <span>Unpaid Invoices</span>
                                                <h3 class="fs-20 mt-1 mb-0">{{ formatTotalAmount($unpaid_invoices) }}</h3>
                                            </div>
                                        </div>
                                        <!-- <div class="d-flex justify-content-between flex-wrap gap-1 align-items-center">
                                            <span class="fs-12"> month</span>
                                            <span class="count down fw-medium ms-0">-15%</span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                            

                            <div class="col-xxl-3 col-xl-3 col-sm-6">
                                <div class="card bg-success bg-opacity-10 border-success border-opacity-10 rounded-3 mb-4 stats-box style-three">
                                    <div class="card-body p-4">
                                        <div class="d-flex align-items-center mb-19">
                                            <div class="flex-shrink-0">
                                                <i class="material-symbols-outlined fs-40 text-danger">assignment_late</i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <span>Overdue Invoices</span>
                                                <h3 class="fs-20 mt-1 mb-0">{{ formatTotalAmount($overdue_invoices) }}</h3>
                                            </div>
                                        </div>
                                        <!-- <div class="d-flex justify-content-between flex-wrap gap-2 align-items-center">
                                            <span class="fs-12">Projects this month</span>
                                            <span class="count down fw-medium ms-0">-15%</span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card bg-white border-0 rounded-3 mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3 mb-lg-30">
                            <h3 class="mb-0">{{ __('messages.admin_dashboard.income_overview') }}</h3>
                            <div class="ms-auto">
                                <div id="rightData" class="date-picker-space">
                                    <input class="form-control " id="time_range">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="card-header border-0 pt-5">
                                <h3 class="mb-0">{{ __('messages.admin_dashboard.income_overview') }}</h3>
                                <div class="ms-auto">
                                    <div id="rightData" class="date-picker-space">
                                        <input class="form-control " id="time_range">
                                    </div>
                                </div>
                            </div> -->
                        <div class="card-body p-lg-6 p-0">
                            <div class="">
                                <div id="yearly_income_overview-container" class="pt-2">
                                    <canvas id="yearly_income_chart_canvas" height="200"
                                        width="905"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-xxl-6 col-12 mb-5 mb-xl-0">
                    <div class="card">
                        <div class="card-header pb-0 px-10">
                            <h3 class="mb-0">{{ __('messages.admin_dashboard.payment_overview') }}</h3>
                        </div>
                        <div class="card-body pt-7">
                            <div id="payment-overview-container" class="justify-align-center">
                                <canvas id="payment_overview"></canvas>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="col-lg-4">
                <div class="card bg-white border-0 rounded-3 mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3 mb-lg-4">
                            <h3 class="mb-0">{{ __('messages.admin_dashboard.invoice_overview') }}</h3>
                            <!-- <select class="form-select month-select form-control" aria-label="Default select example">
                                <option selected="">Today</option>
                                <option value="1">Weekly</option>
                                <option value="2">Monthly</option>
                                <option value="3">Yearly</option>
                            </select> -->
                        </div>
                        <div class="pt-4" id="invoice_summery" style="min-height: 328.7px;">
                            <div id="invoice-overview-container" class="justify-align-center">
                                <canvas id="invoice_overview"></canvas>
                            </div>
                        </div>
                        <!-- <ul class="ps-0 mb-0 list-unstyled sales_by_locations style-two">
                            <li>
                                <span class="fw-medium d-block mb-2">Completed Order</span>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-success" style="width: 60%">
                                        <span class="count fw-medium text-body">60%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span class="fw-medium d-block mb-2">New Order</span>
                                <div class="progress" role="progressbar" aria-label="Primary example" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-primary" style="width: 30%">
                                        <span class="count fw-medium text-body">30%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span class="fw-medium d-block mb-2">Pending Order</span>
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-primary-div" style="width: 10%">
                                        <span class="count fw-medium text-body">10%</span>
                                    </div>
                                </div>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ Form::hidden('currency', getCurrencySymbol(), ['id' => 'currency']) }}
    @endsection