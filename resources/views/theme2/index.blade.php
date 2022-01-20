@extends('layouts.click-eat-theme2.master')
@section('title')
Home
@stop
@section('content')



<section style="position: relative;">
    
    <div style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">

        <svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
            <defs>
                <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
                    <feGaussianBlur stddeviation="4"></feGaussianBlur>
                </filter>
                <radialGradient id="jssor_1_grd_2">
                    <stop offset="0" stop-color="#fff"></stop>
                    <stop offset="1" stop-color="#000"></stop>
                </radialGradient>
                <mask id="jssor_1_msk_3">
                    <path fill="url(#jssor_1_grd_2)" d="M600,0L600,400L0,400L0,0Z" x="0" y="0" style="position:absolute;overflow:visible;"></path>
                </mask>
            </defs>
        </svg>
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{ asset('theme2-assets/jssor/img/spin.svg')}}" />
            </div>
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;">
               
                <div>
                    <img data-u="image" data-src="{{ asset('theme2-assets/img/images/pictures/rod-long-kImU-9S9uh8-unsplash.jpg')}}" />
                    <div style="background-image: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,1));background-size:cover;width: 100%;position: absolute;z-index: 998;display:block;left:0px;top:0px;bottom:0px;right:0px">
                        <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                            <div data-to="50% 50%" data-t="14" style="left:690px;top:140px;width:600px;height:150px;position:absolute;opacity:0;color:#ffffff;font-family:Georgia,'Times New Roman',Times,serif;font-size:60px;line-height:1.2;letter-spacing:0.1em;font: normal normal bold 60px/80px Segoe UI;
                            letter-spacing: 0px;
                            color: #FFFFFF;
                            text-transform: uppercase;">
                            <h1 style="font: italic normal normal 50px/63px rage;font-family:rage;color: #FFCC00;">Awesome Offer Here!</h1>
                            Want Something Real & Juicy?<br>
                            <button class="btn float-right m-3" style="width: 149px;
                            height: 47px;margin-right: 50px!important;"><b style="font: normal normal bold 24px Open Sans;color:white;">Order Now</b></button> 
                              
                        </div>
                        <img data-to="50% 50%" data-t="15" style="left:780px;top:60px;width: 632px;
height: 400px;position:absolute;opacity:1!important;max-width:344px;opacity:1" data-src="{{ asset('theme2-assets/img/images/icons/png/burger-10956.png')}}" />
                        </div>
                    </div>
                </div>
                <div>
                    <img data-u="image" data-src="{{ asset('theme2-assets/img/images/pictures/rod-long-kImU-9S9uh8-unsplash.jpg')}}" />
                    <div style="background-image: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,1));background-size:cover;width: 100%;position: absolute;z-index: 998;display:block;left:0px;top:0px;bottom:0px;right:0px">
                        <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                            <div data-to="50% 50%" data-t="14" style="left:690px;top:140px;width:600px;height:150px;position:absolute;opacity:0;color:#ffffff;font-family:Georgia,'Times New Roman',Times,serif;font-size:60px;line-height:1.2;letter-spacing:0.1em;font: normal normal bold 60px/80px Segoe UI;
                            letter-spacing: 0px;
                            color: #FFFFFF;
                            text-transform: uppercase;">
                            <h1 style="font: italic normal normal 50px/63px rage;font-family:rage;color: #FFCC00;">Awesome Offer Here!</h1>
                            Want Something Real & Juicy?<br>
                            <button class="btn float-right m-3" style="width: 149px;
                            height: 47px;margin-right: 50px!important;"><b style="font: normal normal bold 24px Open Sans;color:white;">Order Now</b></button> 
                              
                        </div>
                        <img data-to="50% 50%" data-t="15" style="left:780px;top:60px;width: 632px;
height: 400px;position:absolute;opacity:1!important;max-width:344px;opacity:1" data-src="{{ asset('theme2-assets/img/images/icons/png/burger-10956.png')}}" />
                       
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
        </div>
        <script type="text/javascript">jssor_1_slider_init();
        </script>
        <!-- #endregion Jssor Slider End -->
    </div>
</section>

<section class="d-flex sidebar-menu">
    <div class="side-menu">
        <div class="menu-item position-relative">
            <div class="item">
                <img src="{{ asset('theme2-assets/img/images/icons/pizza.png')}}" alt="">
                <p>Pizza</p>
            </div>
        </div>
        <div class="menu-item position-relative">
            <div class="item">
                <img src="{{ asset('theme2-assets/img/images/icons/burger.png')}}" alt="">
                <p>Burger</p>
            </div>
        </div>
        <div class="menu-item position-relative">
            <div class="item">
                <img src="{{ asset('theme2-assets/img/images/icons/turkey.png')}}" alt="">
                <p>Chicken</p>
            </div>
        </div>
        <div class="menu-item position-relative">
            <div class="item">
                <img src="{{ asset('theme2-assets/img/images/icons/sandwich.png')}}" alt="">
                <p>Sandwich</p>
            </div>
        </div>
        <div class="menu-item position-relative">
            <div class="item">
                <img src="{{ asset('theme2-assets/img/images/icons/fried-potatoes.png')}}" alt="">
                <p>Fries</p>
            </div>
        </div>
        <div class="menu-item position-relative" style="border:none">
            <div class="item">
                <img src="{{ asset('theme2-assets/img/images/icons/cocktail.png')}}" alt="">
                <p>Drinks</p>
            </div>
        </div>
    </div>
    <div class="m-4">
        <div class="d-flex flex-wrap">
            
        @foreach($products as $p)  
        <div class="py-3" style="flex:1;margin-right:20px">
                <div class="card card-shadow center p-3" style="width:255px;position: relative;">
                <div class="dish-heart mx-2 img-circle">
                            <i class="fa fa-heart" style="color:#f02c2b"></i>
                        </div>
                        <div class="text-center">
                        <img src="{{ asset('images/'.$p->image->name)}}" alt="" style="width:177px;height:177px"><br>
                        <b style="font: normal normal bold 18px/24px Open Sans;text-align:center">{{$p->name}}</b><br>
                        <b style="font: normal normal bold 18px/24px Open Sans;text-align:center;color: #FFCC00;">${{$p->price}}</b><br>
                        <div class="text-center"><a href="{{url('/product-details/'.$p->id)}}" style="text-decoration: none;"><button class="btn btn-block" style="border-radius: 8px;font-weight: 500px;margin-top: 10px;"><i class="fa fa-shopping-basket mr-2"></i>Add to cart</button></a></div>
                </div>
                </div>  
            </div>
            @endforeach
        </div>
    </div>
</section>

<section>
    <div style="width: 100%;
    height: 500px;background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,1)),url({{ asset('theme2-assets/img/images/pictures/louis-hansel-Pcq4akUeU68-unsplash.jpg')}});
    background-size: cover;position: relative;">
        <div class="res-width" style="width: 560px;
        height: 430px;position: absolute;bottom:0px;right:0">
            <img src="{{ asset('theme2-assets/img/images/icons/png/girl-eating-pizza.png')}}" alt="" class="float-right" style="width:100%;height:100%;">
        </div>
        <div class="img-section2">
            <p style="font: italic normal normal 50px/63px Rage;
            letter-spacing: 0px;word-break: break-word;
            color: #FFCC00;">Awesome Offer Here!</p>
            <b class="about-img-h" style="font: normal normal bold 49px/45px Open Sans;color: #fff;word-break: break-word;">Want Something Real &amp; Juicy?</b>
            <p style="font: normal normal normal 12px/17px Open Sans;color: #9F9990;margin-top: 10px;word-break: break-word;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            <div class="mt-4">
                <div class="d-flex">
                    <button class="btn text-white" style="border-radius: 8px;padding:12px 22px">ABOUT MORE</button>
                    <button class="btn btn-2" style="background-color: transparent;margin-left:56px;border: 1px solid #FFFFFF;
                    border-radius: 8px;color:#fff;padding:12px 22px">ABOUT MORE</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-4 papular-menu">
    <div class="container">
        <div class="text-center head-1 mt-5">
            <h1>Most Papular</h1>
        </div>
        <div class="center papular-text">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
        </div>
        <div class="row">
            <div class="col-md-3 mt-4">
                <div class="card shadow p-3">
                        <div class="ml-auto dish-heart mx-2 img-circle">
                            <i class="fa fa-heart" style="color:#f02c2b"></i>
                        </div>
                        <img src="{{ asset('theme2-assets/img/images/icons/png/3-1.png')}}" alt="">
                        <b style="font: normal normal bold 18px/24px Open Sans;text-align:center">BBQ Chicken pizza</b>
                        <b style="font: normal normal bold 18px/24px Open Sans;text-align:center;color: #FFCC00;">$10.00</b>
                        <button class="btn" style="border-radius: 8px;font-weight: 500px;margin-top: 10px;"><i class="fa fa-shopping-basket mr-2"></i>Add to cart</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row m-0">
        <div class="col-lg-6 pl-0 h-m-img">
            <div style="width: 100%;
    height: 560px;background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,1)),url({{ asset('theme2-assets/img/images/pictures/louis-hansel-Pcq4akUeU68-unsplash.jpg')}});
    background-size: cover;position: relative;">
        <div class="res-width" style="width: 350px;
        height: 520px;position: absolute;bottom:0px;right:30px;top:20px">
            <img src="{{ asset('theme2-assets/img/images/icons/png/Pizza Picture.png')}}" alt="" class="float-right" style="width:100%;height:100%;">
        </div>
        <div class="res-width" style="width: 261px;
        height: 159px;position: absolute;top:160px;left:20px;">
            <p style="font: italic normal normal 20px Rage;
            letter-spacing: 0px;
            color: #FFCC00;">Awesome Offer Here!</p>
            <b style="font: normal normal bold 20px Open Sans;color: #fff;">Want Something Real & Juicy?</b>
            <p style="font: normal normal normal 12px Open Sans;color: #9F9990;margin-top: 10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            <div class="mt-4">
                <div class="d-flex">
                    <button class="btn text-white" style="border-radius: 8px;">ABOUT MORE</button>
                    
                </div>
            </div>
        </div>
    </div>
        </div>
        <div class="col-lg-6 px-0">
    <div style="width: 100%;
    height: 270px;background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,1)),url({{ asset('theme2-assets/img/images/pictures/louis-hansel-Pcq4akUeU68-unsplash.jpg')}});
    background-size: cover;position: relative;">
        <div class="res-width" style="width: 230px;
        height: 230px;position: absolute;bottom:0px;left:20px;top:20px">
            <img src="{{ asset('theme2-assets/img/images/icons/png/Veg-pizza@2x.png')}}" alt="" class="float-right" style="width: 195px;
            height: 132px;">
            <img src="{{ asset('theme2-assets/img/images/icons/png/NicePng_pizza-png-transparent_701100@2x.png')}}" alt="" class="float-right" style="width: 211px;
            height: 118px;">
        </div>
        <div class="res-width" style="width: 261px;
        height: 159px;position: absolute;top:20px;bottom: 0px;padding:20px;right:0px">
            <p style="font: italic normal normal 15px Rage;
            letter-spacing: 0px;
            color: #FFCC00;">Awesome Offer Here!</p>
            <b style="font: normal normal bold 20px Open Sans;color: #fff;">Want Something Real & Juicy?</b>
            <p style="font: normal normal normal 12px Open Sans;color: #9F9990;margin-top: 10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            <div class="">
                <div class="d-flex">
                    <button class="btn text-white" style="border-radius: 8px;">ABOUT MORE</button>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="h-m-img2" style="width: 100%;
    height: 270px;background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,1)),url({{ asset('theme2-assets/img/images/pictures/louis-hansel-Pcq4akUeU68-unsplash.jpg')}});
    background-size: cover;position: relative;">
        <div class="res-width" style="width: 321px;
        height: 230px;position: absolute;bottom:0px;right:20px;top:20px">
            <img src="{{ asset('theme2-assets/img/images/icons/png/Burger Pics.png')}}" alt="" class="float-right" style="width:100%;height:100%;">
        </div>
        <div class="res-width" style="width: 261px;
        height: 159px;position: absolute;top:20px;bottom: 0px;padding:20px">
            <p style="font: italic normal normal 15px Rage;
            letter-spacing: 0px;
            color: #FFCC00;">Awesome Offer Here!</p>
            <b style="font: normal normal bold 20px Open Sans;color: #fff;">Want Something Real & Juicy?</b>
            <p style="font: normal normal normal 12px Open Sans;color: #9F9990;margin-top: 10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            <div class="">
                <div class="d-flex">
                    <button class="btn text-white" style="border-radius: 8px;">ABOUT MORE</button>
                    
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
</section>

<section class="gallery-sec my-4">
    <div class="container">
        <div class="text-center head-1 my-1">
            <h1>Our Gallery</h1>
        </div>
        <div class="center gallery-text">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
        </div>
        <div class="row pt-4 gallery">
            <div class="col-md-4 py-3">
                <div class="text-center g-img">
                    <img src="{{ asset('theme2-assets/img/images/pictures/homemade-mexican-chicken-burrito-bowl.jpg')}}" alt="" style="width:100%;height:100%">
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="text-center g-img">
                    <img src="{{ asset('theme2-assets/img/images/pictures/homemade-mexican-chicken-burrito-bowl.jpg')}}" alt="" style="width:100%;height:100%">
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="text-center g-img">
                    <img src="{{ asset('theme2-assets/img/images/pictures/homemade-mexican-chicken-burrito-bowl.jpg')}}" alt="" style="width:100%;height:100%">
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="text-center g-img">
                    <img src="{{ asset('theme2-assets/img/images/pictures/homemade-mexican-chicken-burrito-bowl.jpg')}}" alt="" style="width:100%;height:100%">
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="text-center g-img">
                    <img src="{{ asset('theme2-assets/img/images/pictures/homemade-mexican-chicken-burrito-bowl.jpg')}}" alt="" style="width:100%;height:100%">
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="text-center g-img">
                    <img src="{{ asset('theme2-assets/img/images/pictures/homemade-mexican-chicken-burrito-bowl.jpg')}}" alt="" style="width:100%;height:100%">
                </div>
            </div>
        </div>
    </div>
</section>

@stop