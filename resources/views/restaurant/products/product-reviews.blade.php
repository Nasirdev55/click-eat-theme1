@extends('layouts.vendor-admin.master')
@section('title')
Products Reviews
@endsection
@section('header-extra-links')
@endsection
@section('content')
<div class="main-content">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true">Product Reviews List</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active p-4" id="home" role="tabpanel" aria-labelledby="home-tab">
        <table class="table responsive" id="data-table" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>product Id</th>
                                <th>Stars</th>
                                <th>Review</th>
                            </tr>
                        </thead>
                        <tbody>
							@foreach($revs as $index=>$r)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$r->name}}</td>
                                <td>{{$r->email}}</td>
                                <td>{{$r->product_id}}</td>
                                <td>{{$r->stars}}</td>
                                <td>{{$r->review}}</td>
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
