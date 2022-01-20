@extends('layouts.click-eat-theme2.master')
@section('title')
Customer Contact
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
        <h1 class="text-white">Customer Contact</h1>
        <b>Home / Customer</b>
    </div>
</section>

<section class="contact my-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4 p-4 center">
                <div class="text-center contact-image">
                    <img src="{{ asset('theme2-assets/img/images/pictures/Face/rowan-chestnut-m663zRzRe40-unsplash.jpg')}}" alt="">
                    <b style="position: relative;top:-40px;color:white">Linda Hamilton</b>
                </div>
                <div class="f-div center">
                    <p><b class="contact-no theme-color"><i class="fa fa-phone mr-2 phone"></i><span> +1 111 222 3333</span></b></p>
                </div>
                
            </div>
            <div class="col-md-4 p-4 center">
                <div class="text-center contact-image">
                    <img src="{{ asset('theme2-assets/img/images/pictures/Face/michael-dam-mEZ3PoFGs_k-unsplash.jpg')}}" alt="">
                    <b style="position: relative;top:-40px;color:white">Linda Hamilton</b>
                </div>
                <div class="f-div center">
                   
                    <p><b class="contact-no theme-color"><i class="fa fa-phone mr-2 phone"></i><span> +1 111 222 3333</span></b></p>
                </div>
               
                
            </div>
            <div class="col-md-4 p-4 center">
                <div class="text-center contact-image">
                    <img src="{{ asset('theme2-assets/img/images/pictures/Face/rafaella-mendes-diniz-et_78QkMMQs-unsplash.jpg')}}" alt="">
                    <b style="position: relative;top:-40px;color:white">Linda Hamilton</b>
                </div>
                <div class="f-div center">
                    
                    <p><b class="contact-no theme-color"><i class="fa fa-phone mr-2 phone"></i><span> +1 111 222 3333</span></b></p>
                </div>
               
                
            </div>
            <div class="col-md-4 p-4 center">
                <div class="text-center contact-image">
                    <img src="{{ asset('theme2-assets/img/images/pictures/Face/rowan-chestnut-m663zRzRe40-unsplash.jpg')}}" alt="">
                    <b style="position: relative;top:-40px;color:white">Linda Hamilton</b>
                </div>
                <div class="f-div center">
                   
                   <p><b class="contact-no theme-color"><i class="fa fa-phone mr-2 phone"></i><span> +1 111 222 3333</span></b></p>
                </div>
            
                
            </div>
            <div class="col-md-4 p-4 center">
                <div class="text-center contact-image">
                    <img src="{{ asset('theme2-assets/img/images/pictures/Face/michael-dam-mEZ3PoFGs_k-unsplash.jpg')}}" alt="">
                    <b style="position: relative;top:-40px;color:white">Linda Hamilton</b>
                </div>
                <div class="f-div center">
                  
                   <p><b class="contact-no theme-color"><i class="fa fa-phone mr-2 phone"></i><span> +1 111 222 3333</span></b></p>
                </div>
               
                
            </div>
            <div class="col-md-4 p-4 center">
                <div class="text-center contact-image">
                    <img src="{{ asset('theme2-assets/img/images/pictures/Face/rafaella-mendes-diniz-et_78QkMMQs-unsplash.jpg')}}" alt="">
                    <b style="position: relative;top:-40px;color:white">Linda Hamilton</b>
                </div>
                <div class="f-div center">
                    
                   <p><b class="contact-no theme-color"><i class="fa fa-phone mr-2 phone"></i><span> +1 111 222 3333</span></b></p>
                </div>
               
                
            </div>

             <div class="col-md-4 p-4 center">
                <div class="text-center contact-image">
                    <img src="{{ asset('theme2-assets/img/images/pictures/Face/rafaella-mendes-diniz-et_78QkMMQs-unsplash.jpg')}}" alt="">
                    <b style="position: relative;top:-40px;color:white">Linda Hamilton</b>
                </div>
                <div class="f-div center">
                    
                   <p><b class="contact-no theme-color"><i class="fa fa-phone mr-2 phone"></i><span> +1 111 222 3333</span></b></p>
                </div>
               
                
            </div>

             <div class="col-md-4 p-4 center">
                <div class="text-center contact-image">
                    <img src="{{ asset('theme2-assets/img/images/pictures/Face/rafaella-mendes-diniz-et_78QkMMQs-unsplash.jpg')}}" alt="">
                    <b style="position: relative;top:-40px;color:white">Linda Hamilton</b>
                </div>
                <div class="f-div center">
                    
                   <p><b class="contact-no theme-color"><i class="fa fa-phone mr-2 phone"></i><span> +1 111 222 3333</span></b></p>
                </div>
               
                
            </div>

             <div class="col-md-4 p-4 center">
                <div class="text-center contact-image">
                    <img src="{{ asset('theme2-assets/img/images/pictures/Face/rafaella-mendes-diniz-et_78QkMMQs-unsplash.jpg')}}" alt="">
                    <b style="position: relative;top:-40px;color:white">Linda Hamilton</b>
                </div>
                <div class="f-div center">
                    
                   <p><b class="contact-no theme-color"><i class="fa fa-phone mr-2 phone"></i><span> +1 111 222 3333</span></b></p>
                </div>
               
                
            </div>

             <div class="col-md-4 p-4 center">
                <div class="text-center contact-image">
                    <img src="{{ asset('theme2-assets/img/images/pictures/Face/rafaella-mendes-diniz-et_78QkMMQs-unsplash.jpg')}}" alt="">
                    <b style="position: relative;top:-40px;color:white">Linda Hamilton</b>
                </div>
                <div class="f-div center">
                    
                   <p><b class="contact-no theme-color"><i class="fa fa-phone mr-2 phone"></i><span> +1 111 222 3333</span></b></p>
                </div>
               
                
            </div>

             <div class="col-md-4 p-4 center">
                <div class="text-center contact-image">
                    <img src="{{ asset('theme2-assets/img/images/pictures/Face/rafaella-mendes-diniz-et_78QkMMQs-unsplash.jpg')}}" alt="">
                    <b style="position: relative;top:-40px;color:white">Linda Hamilton</b>
                </div>
                <div class="f-div center">
                    
                   <p><b class="contact-no theme-color"><i class="fa fa-phone mr-2 phone"></i><span> +1 111 222 3333</span></b></p>
                </div>
               
                
            </div>

             <div class="col-md-4 p-4 center">
                <div class="text-center contact-image">
                    <img src="{{ asset('theme2-assets/img/images/pictures/Face/rafaella-mendes-diniz-et_78QkMMQs-unsplash.jpg')}}" alt="">
                    <b style="position: relative;top:-40px;color:white">Linda Hamilton</b>
                </div>
                <div class="f-div center">
                    
                   <p><b class="contact-no theme-color"><i class="fa fa-phone mr-2 phone"></i><span> +1 111 222 3333</span></b></p>
                </div>
               
                
            </div>
        </div>
    </div>
</section>
@stop