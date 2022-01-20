@extends('layouts.vendor-admin.master')
@section('title')
About Us
@endsection
@section('header-extra-links')
@endsection
@section('content')
<div class="main-content">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true">About Us</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active p-4" id="home" role="tabpanel" aria-labelledby="home-tab">
        @if(Session::has('msg'))
                     <div class="alert alert-primary mt-3">{{Session('msg')}}</div>
                     @endif
        <form action="{{url('/markete/pages/about-us/create')}}" method="post" enctype="multipart/form-data">@csrf
            <div class="form-group">
                <input type="text" name="name" placeholder="Chef Name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" required>
                @error('name')
                <span class="invalid-feedback">
                    {{$message}}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <input type="file" name="image" value="{{old('image')}}" class="form-control @error('image') is-invalid @enderror" required>
                @error('image')
                <span class="invalid-feedback">
                    {{$message}}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <textarea name="description" placeholder="Chef Description" value="{{old('description')}}" class="form-control @error('description') is-invalid @enderror" required></textarea>
                @error('description')
                <span class="invalid-feedback">
                    {{$message}}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Add</button>
            </div>
        </form>
        <h3 class="my-4">All Your Chefs</h3>
        <table class="table responsive" id="data-table" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr No</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($chefs as $index=>$b)
                        <tr>
                                <td>{{$index+1}}</td>
                                <td><img src="{{asset('images/'.$b->image)}}" alt="" style="width: 50px;height:50px;"></td>
                                <td>{{$b->name}}</td>
                                <td>{{$b->description}}</td>
                                <td><a href="{{url('markete/pages/about-us/delete/'.$b->id)}}"><img src="{{ asset('super-admin-assets/icons/bin.png')}}" alt=""></a>
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
