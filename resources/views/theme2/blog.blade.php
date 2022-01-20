@extends('layouts.click-eat-theme2.master')
@section('title')
Blog
@stop
@section('content')



<section class="page-title">
    <div class="h-container text-white text-center">
        <h1 class="text-white text-center" style="font: italic normal normal 50px/63px rage;
                letter-spacing: 0px;">Blog</h1>
         <b>Home / Blog</b>
    </div>
</section>



<section class="my-5 blog">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                @if(count($blogs))
                    @foreach($blogs as $b)
                <div class="row bg-light p-3 mb-5" style="border-radius: 8px;">
                    <div class="col-md-6">
                        <img src="{{ asset('/images/'.$b->image)}}" alt="" style="width: 100%;height: 235px;">
                    </div>
                    <div class="col-md-6 blog-s-div">
                        
                        <b style="font: normal normal 600 20px/20px Open Sans;">{{$b->title}}</b>
                        <p style="font: normal normal normal 12px/16px Open Sans;margin-top:10px">{{$b->text}}</p>
                        
                    </div>
                </div>
                @endforeach
                @else
                <div class="row bg-light p-3" style="border-radius: 8px;">
                    <div class="col-md-6">
                        <img src="{{ asset('theme2-assets/img/images/pictures/pexels-dario-solano-4085597.jpg')}}" alt="" style="width: 100%;height: 235px;">
                    </div>
                    <div class="col-md-6 blog-s-div">
                        
                        <b style="font: normal normal 600 20px/20px Open Sans;">My Favorite Easy Black Pizza Toast Recipe</b>
                        <p style="font: normal normal normal 12px/16px Open Sans;margin-top:10px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus fermentum neque sagittis quam. Cras congue, sapien quis rutrum dapibus, orci justo blandit nequelorem eros viverra justo, sit fringilla.</p>
                        
                    </div>
                </div>
                @endif
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-4 blog-sidebar">
                <div class="card p-4" style="border-radius:8px">
                    <b style="font: normal normal bold 30px/14px Open Sans;margin: 10px 0px;">Categories</b>
                    <div class="d-flex mt-4">
                        <div>
                            <div class="d-flex">
                                <div>
                                    <img src="{{ asset('theme2-assets/img/images/icons/sandwich.svg')}}" alt="" style="width:30px;height:30px">
                                </div>
                                <div class="ml-4">
                                    <b style="font: normal normal bold 17px/14px Open Sans;">Sandwich</b>
                                </div>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <b>(50)</b>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <div>
                            <div class="d-flex">
                                <div>
                                    <img src="{{ asset('theme2-assets/img/images/icons/pizza.svg')}}" alt="" style="width:30px;height:30px">
                                </div>
                                <div class="ml-4">
                                    <b style="font: normal normal bold 17px/14px Open Sans;">Pizza</b>
                                </div>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <b>(50)</b>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <div>
                            <div class="d-flex">
                                <div>
                                    <img src="{{ asset('theme2-assets/img/images/icons/turkey.svg')}}" alt="" style="width:30px;height:30px">
                                </div>
                                <div class="ml-4">
                                    <b style="font: normal normal bold 17px/14px Open Sans;">Chicken</b>
                                </div>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <b>(50)</b>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <div>
                            <div class="d-flex">
                                <div>
                                    <img src="{{ asset('theme2-assets/img/images/icons/fried-potatoes.svg')}}" alt="" style="width:30px;height:30px">
                                </div>
                                <div class="ml-4">
                                    <b style="font: normal normal bold 17px/14px Open Sans;">Fries</b>
                                </div>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <b>(50)</b>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <div>
                            <div class="d-flex">
                                <div>
                                    <img src="{{ asset('theme2-assets/img/images/icons/cocktail.svg')}}" alt="" style="width:30px;height:30px">
                                </div>
                                <div class="ml-4">
                                    <b style="font: normal normal bold 17px/14px Open Sans;">Drinks</b>
                                </div>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <b>(50)</b>
                        </div>
                    </div>
                </div>
                <div class="mt-3 bg-light pp-5 text-center">
                    <b style="font: normal normal bold 21px/18px Open Sans;">Never Miss A Post!</b>
                    <p class="mt-1">Signup for free and be the first to get notified on new updates</p>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                        <i class="fa fa-envelope" style="position: relative;top:-31px;left:100px"></i>
                    </div>
                    <button class="btn btn-block text-white" style="margin-top: -20px;">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
