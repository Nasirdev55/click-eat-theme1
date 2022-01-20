@extends('layouts.click-eat-theme2.master')
@section('title')
About Us
@stop
@section('content')



<section class="page-title">
    <div class="h-container text-white text-center">
        <h1 class="text-white text-center" style="font: italic normal normal 50px/63px rage;
                letter-spacing: 0px;">About Us</h1>
        <b>Home / About us</b>
    </div>
</section>





<section class="my-4 our-chef">
    <div class="container">
        <div class="text-center head-1 my-1">
            <h1>Our Chef</h1>
        </div>

        <div class="row pt-4">
            @if(count($chefs))
            @foreach($chefs as $c)
            
            <div class="col-md-4 mt-4">
                <div class="card p-4 center">
                    <div class="img1"
                        style="height: 124px; width: 124px; margin-left: auto;margin-right: auto;display: block;">
                        <img class="card-img-top"
                            src="{{ asset('/images/'.$c->image)}}"
                            alt="Card image cap" style="height: 100%; width: 100%; border-radius: 50%;">
                    </div>
                    <div class="card-block text-center mt-4">
                        <h4 class="card-title">{{$c->name}}</h4>
                        <p class="card-text">{{$c->description}}</p>
                    </div>

                </div>
            </div>
            @endforeach
            @else
            <div class="col-md-4 mt-4">
                <div class="card p-4 center">
                    <div class="img1"
                        style="height: 124px; width: 124px; margin-left: auto;margin-right: auto;display: block;">
                        <img class="card-img-top"
                            src="{{ asset('/images/pictures/Face/michael-dam-mEZ3PoFGs_k-unsplash.jpg')}}"
                            alt="Card image cap" style="height: 100%; width: 100%; border-radius: 50%;">
                    </div>
                    <div class="card-block text-center mt-4">
                        <h4 class="card-title">Jamie Oliver</h4>
                        <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                    </div>

                </div>
            </div>
            @endif
        </div>
    </div>
</section>

@stop
