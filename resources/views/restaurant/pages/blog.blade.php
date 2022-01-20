@extends('layouts.vendor-admin.master')
@section('title')
Blog
@endsection
@section('header-extra-links')
@endsection
@section('content')
<div class="main-content">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true">Blog</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active p-4" id="home" role="tabpanel" aria-labelledby="home-tab">
        @if(Session::has('msg'))
                     <div class="alert alert-primary mt-3">{{Session('msg')}}</div>
                     @endif
        <form action="{{url('/markete/pages/blog/create')}}" method="post" enctype="multipart/form-data">@csrf
            <div class="form-group">
                <input type="text" name="title" placeholder="Blog Title" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" required>
                @error('title')
                <span class="invalid-feedback">
                    {{$message}}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <input type="file" name="image" placeholder="Blog image" value="{{old('image')}}" class="form-control @error('image') is-invalid @enderror" required>
                @error('image')
                <span class="invalid-feedback">
                    {{$message}}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <textarea name="text" placeholder="Blog Text" value="{{old('text')}}" class="form-control @error('text') is-invalid @enderror" required></textarea>
                @error('text')
                <span class="invalid-feedback">
                    {{$message}}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Add</button>
            </div>
        </form>
        <h3 class="my-4">All Your Blogs</h3>
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
                            @foreach($blogs as $index=>$b)
                        <tr>
                                <td>{{$index+1}}</td>
                                <td><img src="{{asset('images/'.$b->image)}}" alt="" style="width: 50px;height:50px;"></td>
                                <td>{{$b->title}}</td>
                                <td>{{$b->text}}</td>
                                <td><a href="{{url('markete/pages/blog/delete/'.$b->id)}}"><img src="{{ asset('super-admin-assets/icons/bin.png')}}" alt=""></a>
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
