@extends('layouts.vendor-admin.master')
@section('title')
Table Booking
@endsection
@section('header-extra-links')
@endsection
@section('content')
<div class="main-content">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true">Table Booking List</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active p-4" id="home" role="tabpanel" aria-labelledby="home-tab">
        @if(Session::has('msg'))
                     <div class="alert alert-primary mt-3">{{Session('msg')}}</div>
                     @endif
        <table class="table responsive" id="data-table" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Persons</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings as $b)
                            <tr>
                                <td>{{$b->name}}</td>
                                <td>{{$b->email}}</td>
                                <td>{{$b->phone}}</td>
                                <td>{{$b->date}}</td>
                                <td>{{$b->time}}</td>
                                <td>{{$b->persons}}</td>
                                <td><a href="{{url('markete/table-booking/delete/'.$b->id)}}" class="nav-link"><img src="{{asset('vendor-admin-assets/icons/bin.png')}}" alt=""></a></td>
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
