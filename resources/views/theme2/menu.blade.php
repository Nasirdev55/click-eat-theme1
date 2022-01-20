@extends('layouts.click-eat-theme2.master')
@section('title')
Menu
@stop
@section('content')

<section>
    
    <div class="shopping-cart" id="shopping-cart">
        <div class="h-cart">
            <div class="card">
                <div class="card-header py-3 bg-light">
                    <b style="font:bold 12px/17px">SHOPPING CART</b>
                    <span><i class="fa fa-close close" style="font-size: 20px;color: black;"onclick="shopping_cart_close()"></i></span>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <div class="card shadow">
                            <img src="{{ asset('theme2-assets/img/images/icons/png/3-1.png')}}" alt="">
                        </div>
                        <div class="ml-2">
                            <b>BBQ chicken breast</b>
                            <p><span class="counter2">1</span> * <span class="theme-color">$09.99</span></p>
                            <div class="counter">
                                <div class="text-center">
                                    <i class="fa fa-minus" id="n2" onclick="minus(this.id)"></i>
                                    <span class="mx-2" id="counter2">1</span>
                                    <i class="fa fa-plus" id="p2" onclick="plus(this.id)"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="checkout-btn">
                    <div class="d-flex">
                        <b>Subtotal</b>
                        <b class="ml-auto">$19.98</b>
                    </div>
                    <button class="btn btn-block mt-4 center">Checkout</button>
                </div>
            
        </div>
     </div>
</section>



<section class="page-title">
    <div class="h-container text-white text-center">
        <h1 class="text-white text-center" style="font: italic normal normal 50px/63px rage;
                letter-spacing: 0px;">Menu</h1>
         <b>Home / Menu</b>
    </div>
</section>


<section class="my-4 mt-5">
    <div class="container">
      
        <div class="row menu-restaurant2">
          <div class="col-md-3 mb-3">
                <div class="card card-shadow border-0 p-3 center">
                    <div class="ellip">
                    <img src="{{ asset('theme2-assets/img/images/pictures/delivery-truck (1).svg')}}" alt="">
                </div>
                    <div class="super-d mt-3">
                    <b>Super Fast Delivery</b>
                    <p class="mt-3">Free Delivery In You Location</p>
                </div>
                <div class="order-now">
                    <b>Order Now</b>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card card-shadow border-0 p-3 center">
                   <img src="{{ asset('theme2-assets/img/images/pictures/food-safety.svg')}}"><br>
                    <div class="mt-3">
                    <b>100% Best Quality</b>
                    <p class="mt-3">We Provide Best Quality Food</p>
                </div>
                <div class="order-now">
                    <b>Order Now</b>
                </div>
                </div>
            </div>
          <div class="col-md-3 mb-3">
                <div class="card card-shadow border-0 p-3 center">
                     <img src="{{ asset('theme2-assets/img/images/pictures/cashback.svg')}}"><br>
                    <div class="mt-3">
                    <b>Money Back Guarantee</b>
                    <p class="mt-3">We Provide Best Quality Food</p>
                </div>
                <div class="order-now">
                    <b>Order Now</b>
                </div>
                </div>
            </div>
         <div class="col-md-3 mb-3">
                <div class="card card-shadow border-0 p-3 center">
                    <img src="{{ asset('theme2-assets/img/images/pictures/menu.svg')}}"><br>
                    <div class="mt-3">
                    <b>Delicious Food Menu</b>
                    <p class="mt-3">Food Khan Provide Best Food</p>
                </div>
                <div class="order-now">
                    <b>Order Now</b>
                </div>
                </div>
            </div>
        
        </div>
    </div>
</section>

<section class="my-4 mt-5">
    <div class="container">
        <div class="text-center head-1 my-5">
            <h1>Delicious Burger</h1>
        </div>
        <div class="row menu-restaurant3">
          <div class="col-md-1 mb-3 center">
                <div class="card card1   p-3 center" style="background-color: #FFCC00;">
                    <div class="ellip text-center">
                    <img src="{{ asset('theme2-assets/img/images2/Icon/pn3.png')}}" alt="">
                </div>
                   
                <div class="order-burger text-center mt-2">
                    <b style="color: white;">Classic Burger</b>
                </div>
                </div>
            </div>
            <div class="col-md-1 mb-3 center">
                <div class="card card1  p-3 center">
                    <div class="ellip text-center">
                    <img src="{{ asset('theme2-assets/img/images2/Icon/pn4.png')}}" alt="">
                </div>
                   
                <div class="order-burger text-center mt-2">
                    <b>Mushroom Burger</b>
                </div>
                </div>
            </div>
           <div class="col-md-1 mb-3 center">
                <div class="card card1  p-3 center">
                    <div class="ellip text-center">
                    <img src="{{ asset('theme2-assets/img/images2/Icon/pn5.png')}}" alt="">
                </div>
                   
                <div class="order-burger text-center mt-2">
                    <b>Beef Burger</b>
                </div>
                </div>
            </div>
          <div class="col-md-1 mb-3 center">
                <div class="card card1  p-3 center">
                    <div class="ellip text-center">
                    <img src="{{ asset('theme2-assets/img/images2/Icon/pn3.png')}}" alt="">
                </div>
                   
                <div class="order-burger text-center mt-2">
                    <b>Chicken Burger</b>
                </div>
                </div>
            </div>
         <div class="col-md-1 mb-3 center">
                <div class="card card1  p-3 center">
                    <div class="ellip text-center">
                    <img src="{{ asset('theme2-assets/img/images2/Icon/pn4.png')}}" alt="">
                </div>
                   
                <div class="order-burger text-center mt-2">
                    <b>Vegetable Burger</b>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-4 papular-menu">
    <div class="container">
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

<section class="my-4 mt-5">
    <div class="container">
        <div class="text-center head-1 my-5">
            <h1>Delicious Pizza</h1>
        </div>
        <div class="row menu-restaurant3">
          <div class="col-md-1 mb-3 center">
                <div class="card card1   p-3 center" style="background-color: #FFCC00;">
                    <div class="ellip text-center">
                    <img src="{{ asset('theme2-assets/img/images2/Icon/pm1.png')}}" alt="">
                </div>
                   
                <div class="order-burger text-center mt-2">
                    <b style="color: white;">Classic Pizza</b>
                </div>
                </div>
            </div>
            <div class="col-md-1 mb-3 center">
                <div class="card card1  p-3 center">
                    <div class="ellip text-center">
                    <img src="{{ asset('theme2-assets/img/images2/Icon/pm2.png')}}" alt="">
                </div>
                   
                <div class="order-burger text-center mt-2">
                    <b>Mushroom Pizza</b>
                </div>
                </div>
            </div>
           <div class="col-md-1 mb-3 center">
                <div class="card card1  p-3 center">
                    <div class="ellip text-center">
                    <img src="{{ asset('theme2-assets/img/images2/Icon/pm3.png')}}" alt="">
                </div>
                   
                <div class="order-burger text-center mt-2">
                    <b>Beef Pizza</b>
                </div>
                </div>
            </div>
          <div class="col-md-1 mb-3 center">
                <div class="card card1  p-3 center">
                    <div class="ellip text-center">
                    <img src="{{ asset('theme2-assets/img/images2/Icon/pm4.png')}}" alt="">
                </div>
                   
                <div class="order-burger text-center mt-2">
                    <b>Chicken Pizza</b>
                </div>
                </div>
            </div>
         <div class="col-md-1 mb-3 center">
                <div class="card card1  p-3 center">
                    <div class="ellip text-center">
                    <img src="{{ asset('theme2-assets/img/images2/Icon/pm5.png')}}" alt="">
                </div>
                   
                <div class="order-burger text-center mt-2">
                    <b>Vegetable Pizza</b>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="my-4 papular-menu">
    <div class="container">
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

@stop