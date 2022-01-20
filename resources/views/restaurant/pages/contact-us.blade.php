@extends('layouts.vendor-admin.master')
@section('title')
Contact Us
@endsection
@section('header-extra-links')
@endsection
@section('content')
<div class="main-content">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true">Contact Us</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active p-4" id="home" role="tabpanel" aria-labelledby="home-tab">
        @if(Session::has('msg'))
                     <div class="alert alert-primary mt-3">{{Session('msg')}}</div>
                     @endif
        <form action="{{url('/markete/pages/contact-us/update')}}" method="post">@csrf
            <h6>Restaurant Address</h6>
            <div class="form-group">
                <input type="text" name="address" placeholder="Restaurant Address" value="{{$contact->address}}" class="form-control" required>
            </div>
            <h6>Phone Numbers</h6>
            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" placeholder="Phone No 1" value="{{$contact->phone1}}" name="phone1" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                    <input type="text" placeholder="Phone No 2" value="{{$contact->phone2}}" name="phone2" class="form-control" required>
                </div>
            </div>
            <h6>Email Addresses</h6>
            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" placeholder="Email Address 1" name="email1" value="{{$contact->email1}}" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                    <input type="text" placeholder="Email Address 2" value="{{$contact->email2}}" name="email2" class="form-control" required>
                </div>
            </div>
            <h6>Restaurant Hours</h6>
            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" name="hours1" value="{{$contact->hours1}}" placeholder="e.g Monday-Friday: 08:00am-06:00pm" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                    <input type="text" name="hours2" value="{{$contact->hours2}}" placeholder="e.g Saturday-Sunday: 08:00am-10:00pm" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
        <h3 class="my-4">Contact Messages</h3>
        <table class="table responsive" id="data-table" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($messages as $m)
                        <tr>
                                <td>{{$m->fname}}</td>
                                <td>{{$m->lname}}</td>
                                <td>{{$m->email}}</td>
                                <td>{{$m->phone}}</td>
                                <td>{{$m->message}}</td>
                                <td><a href="{{url('markete/pages/contact-us/message/delete/'.$m->id)}}"><img src="{{ asset('super-admin-assets/icons/bin.png')}}" alt=""></a>
                                </td>
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
