@extends('layouts.click-eat-theme2.master')
@section('extra_css')
<link rel="stylesheet" href="{{ asset('theme2-assets/style.css') }}">
@endsection
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-3 col-md-4">
            <div class="dashboard_menu">
                <ul class="nav nav-tabs flex-column" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab"
                            aria-controls="dashboard" aria-selected="false"><i class="ti-layout-grid2"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="orders-tab" data-toggle="tab" href="#orders" role="tab"
                            aria-controls="orders" aria-selected="false"><i class="ti-shopping-cart-full"></i>Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="address-tab" data-toggle="tab" href="#address" role="tab"
                            aria-controls="address" aria-selected="true"><i class="ti-location-pin"></i>My
                            Address</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="account-detail-tab" data-toggle="tab" href="#account-detail" role="tab"
                            aria-controls="account-detail" aria-selected="true"><i class="ti-id-badge"></i>Account
                            details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();"><i class="ti-lock"></i>Logout</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
            </div>
        </div>
        <div class="col-lg-9 col-md-8">
            <div class="tab-content dashboard_content">
                <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <div class="card">
                        <div class="card-header">
                            <h3>Dashboard</h3>
                        </div>
                        <div class="card-body">
                            <p>From your account dashboard. you can easily check &amp; view your <a
                                    href="javascript:void(0);" onclick="$('#orders-tab').trigger('click')">recent
                                    orders</a>, manage your
                                <a href="javascript:void(0);" onclick="$('#address-tab').trigger('click')">shipping and
                                    billing
                                    addresses</a> and <a href="javascript:void(0);"
                                    onclick="$('#account-detail-tab').trigger('click')">edit your password and
                                    account details.</a></p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                    <div class="card">
                        <div class="card-header">
                            <h3>Orders</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>dxfcd</td>
                                            <td>dxfcd</td>
                                            <td>dxfcd</td>
                                            <td>dxfcd</td>
                                            <td><a href="javascript:void(0)" class="btn btn-outline-dark btn-sm"
                                                    onclick="view(this.id)">View</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                    <div class="card">
                        <div class="card-header">
                            <h3>Billing Address</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/billing-details') }}" method="post">
                                @csrf
                                <div class="">

                                    <div class="form-group">
                                        <textarea name="" cols="30" rows="5" id="address" class="form-control"
                                            placeholder="Street Address"></textarea>
                                    </div>
                                    <div class="form-group text-right">
                                        <button class="btn text-white" style="min-width:100px">Update</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                    <div class="card">
                        <div class="card-header">
                            <h3>Account Details</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/account-details') }}" method="post">
                                @csrf
                                <div class="">

                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Your Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-right">
                                        <button class="btn text-white" style="min-width:100px">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
