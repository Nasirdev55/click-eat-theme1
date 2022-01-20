@extends('layouts.vendor-admin.master')
@section('title')
Payments List
@endsection
@section('header-extra-links')
@endsection
@section('content')
<div class="main-content">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true">Payments List</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active p-4" id="home" role="tabpanel" aria-labelledby="home-tab">
        <table class="table responsive" id="data-table" class="display" style="width:100%">
        <thead>
                            <tr>
                            <th>Sr No</th>
                                <th>User Id</th>
                                <th>Order Id</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($payments as $index=>$m)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$m->user_id}}</td>
                                <td>{{$m->order_id}}</td>
                                <td>{{$m->amount}}</td>
                                <td>{{$m->status}}</td>
                                <td>{{$m->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> 
        </div>
    </div>
</div>

@endsection
@section('footer-extra-links')
@endsection
