@extends('layouts.app')
@section('title')
    {{ __('Dashboard') }}
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            <div class="sidebar bg-purple text-white p-3 rounded">
                <h5 class="text-white">Main Menu</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Dashboard</a></li>
                    <li><a href="#" class="text-white">Invoices</a></li>
                    <li><a href="#" class="text-white">Clients</a></li>
                    <li><a href="#" class="text-white">Reports</a></li>
                </ul>
                <h5 class="text-white mt-4">Account</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Settings</a></li>
                    <li><a href="#" class="text-white">Logout</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
            <div class="row">
                <!-- Dashboard Cards -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5>Total Revenue</h5>
                            <h3 class="text-success">$12,650</h3>
                            <p class="text-muted">+20.1% from last month</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5>Overdue</h5>
                            <h3 class="text-danger">$2,450</h3>
                            <p class="text-muted">3 invoices overdue</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5>Total Invoices</h5>
                            <h3>24</h3>
                            <p class="text-muted">+4 new this month</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5>Total Clients</h5>
                            <h3>8</h3>
                            <p class="text-muted">+2 new clients</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Revenue Overview -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5>Revenue Overview</h5>
                            <canvas id="revenueChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Invoice Status -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5>Invoice Status</h5>
                            <canvas id="invoiceStatusChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection