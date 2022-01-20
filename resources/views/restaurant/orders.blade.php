@extends('layouts.vendor-admin.master')
@section('title')
Orders List
@endsection
@section('header-extra-links')
@endsection
@section('content')
<div class="main-content">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true">Orders List</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active p-4" id="home" role="tabpanel" aria-labelledby="home-tab">
        <table class="table responsive" id="data-table" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr No</th>
                                <th>Product ID</th>
                                <th>User Id</th>
                                <th>Items</th>
                                <th>Totals</th>
                                <th>Address</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
							@foreach($orders as $index=>$r)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$r->product_id}}</td>
                                <td>{{$r->user_id}}</td>
                                <td>{{$r->items}}</td>
                                <td>{{$r->totals}}</td>
                                <td>{{$r->address}}</td>
                                <td>{{$r->created_at}}</td>
                                <!--td><a href="{{url('/restaurant/review')}}"><img src="{{asset('vendor-admin-assets/icons/bin.png')}}" alt=""></td-->
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
