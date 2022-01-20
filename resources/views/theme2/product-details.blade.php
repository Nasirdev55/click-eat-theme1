@extends('layouts.click-eat-theme2.master')
@section('title')
Product Details
@stop
@section('extra_css')
<style>
    .menu-restaurant .menu-content p{margin-bottom: 0rem!important;}
.menu-restaurant .fa-heart{position:absolute;right:20px}
.menu-restaurant .col-md-6{margin-bottom: 2rem;}          
.menu-restaurant .menu-basket{background-color: #ffcc00;border-radius: 50%;position: absolute;bottom: 10px;right: 20px;}
.product-details .card img{height:100%;width:100%}
.product-details .card .image-container{height:500px;width:500px;cursor: zoom-in;}
.product-details .card .image-container:hover{cursor: zoom-out;}
.product-details .details b{font: bold 32px / 43px "Segoe UI";}
.product-details .details .counter{border-radius: 50%;width:40px;height:40px}
.product-details .details .plus-icon,.minus-icon{font-size: 15px;padding: 12px;margin-top: -10px;}
.product-details .details .add-cart{height: 40px;}
.product-details .details .d-flex #count{position: relative;bottom: 10px;}
.product-details .details .d-flex .heart-icon{width:40px;height:40px}
.product-details .details .d-flex .fa-heart{padding: 10px;}
.product-details .details .topping img{width:80px;height:80px;border-radius: 10px;margin-top: 10px;margin-left: 5px;}
.product-details .details .sauces img{width:80px;height:80px;border-radius: 10px;margin-top: 10px;margin-left: 5px;}
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #495057;
    background-color: none;
    border: none;
    text-decoration: underline;
    font: bold;
}
.nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover {
    border:none;
    cursor: pointer;
}
.bg-color {
    background-color: #FFCC00;
}
.theme-color {
    color: #FFCC00;
}
@media (max-width:400px){
    .product-details .card .image-container{height:300px;width:300px;cursor: zoom-in;padding: 0px!important;}
}
@media (max-width:400px){
    .add-cart-wrap{margin-top: 20px;}
    .product-details .details .add-cart {
        height: auto;
    }
    .page-title h1 {
        padding-top: 25px;}
        .product-details .card .image-container {
            height: 230px;
            width: 230px;}
}
</style>
@stop
@section('content')
<section class="page-title">
    <div class="container text-white text-center">
        <h1 class="text-white text-center" style="font: italic normal normal 50px/63px rage;
                letter-spacing: 0px;">Product Details</h1>
         <b>Home / Product Details</b>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <div class="row product-details">
            <div class="col-md-6">
                <div class="card shadow card-lg mb-4">
                <div class="image-container center p-4">
                    <img src="{{ asset('images/'.$product->image->name)}}" alt="">
                </div>
            </div>
            </div>
            <div class="col-md-6 details">
                <h1>{{$product->name}}</h1>
                <p class="mb-0">
                    <i class="fa fa-star theme-color"></i>  
                    <i class="fa fa-star theme-color"></i>  
                    <i class="fa fa-star theme-color"></i>  
                    <i class="fa fa-star theme-color"></i>  
                    <i class="fa fa-star theme-color"></i>
                    </p>
                    <p>{{$product->description}}</p>
                     <b class="theme-color">${{$product->price}}</b>   
                     <hr>
                     <div class="d-flex add-cart flex-wrap justify-content-center">
                        <div class="d-flex">
                            <div class=" bg-light pe-3 counter">
                                <i class="fa fa-minus center minus-icon" id="n0" onclick="minus(this.id)"></i>
                            </div>
                                <span id="counter0" class="px-3 pt-2">1</span>
                           <form action="{{url('/add-to-cart')}}" method="post">
                               @csrf
                               <input type="hidden" name="items" id="items" value="1">
                               <input type="hidden" name="pid" value="{{$product->id}}">
                            <div class=" bg-light counter">
                                <i class="fa fa-plus center plus-icon" id="p0" onclick="plus(this.id)"></i>
                            </div>
                        </div>
                        <div class="d-flex add-cart-wrap">
                            <div class="btn-block mx-3">
                                <button class="btn btn-block w-100 pr-4" type="submit" <?php if(session()->has('cart')){if(isset(session('cart')[$product->id])) echo 'disabled';} ?> ><i class="fa fa-shopping-basket px-3"></i> <?php if(session()->has('cart')){if(isset(session('cart')[$product->id])) echo 'Added';else echo 'add to cart';} else echo 'add to cart'; ?> </button></form>
                            </div>
                            <div class="heart-icon">
                                <i class="fa fa-heart center"></i>
                            </div>
                        </div>
                    </div>
                    <hr>  
                    <b>Sauces</b>
                    <div class="d-flex sauces flex-wrap">
                            <div>
                                <img src="{{ asset('theme1-assets/img/images/icons/png/s1.png')}}" alt="">
                                <p class="text-center m-0">Atomic</p>
                            </div>
                            <div>
                                <img src="{{ asset('theme1-assets/img/images/icons/png/s2.png')}}" alt="">
                                <p class="text-center m-0">Garlic</p>
                            </div>
                    </div>  
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <nav class="nav nav-tabs" style="border: none;">
            <a class="nav-link active" data-toggle="tab" data-target="#description" style="border: none;font: normal normal normal 25px/24px Open Sans;">Description</a>
            <a class="nav-link" data-toggle="tab" data-target="#reviews" style="border: none;font: normal normal normal 25px/24px Open Sans;">Reviews(2)</a>
        </nav>
        <div class="tab-content">
            <div class="tab-pane fade show active mt-3" id="description">
                <p class="pl-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit nulla exercitationem ab harum blanditiis placeat ducimus deleniti, architecto sed, incidunt dignissimos itaque perferendis odit! Maxime nulla itaque quos enim sequi.</p>
            </div>
            <div class="tab-pane fade" id="reviews">
                <div class="d-flex ml-3 mt-4">
                    <div>
                        <img src="{{ asset('theme2-assets/img/images/pictures/Face/michael-dam-mEZ3PoFGs_k-unsplash.jpg')}}" alt="" style="width: 70px;
                        height: 70px;border-radius:50%">
                    </div>
                    <div class="bg-light ml-3 p-3">
                        <div class="d-flex flex-wrap">
                            <div class="">
                                <b>Linda Lewis</b>
                            </div>
                            <div class="ml-5">
                                September 28, 2021
                            </div>
                        </div>
                        <div class="mb-3">
                            <i class="fa fa-star theme-color"></i>
                            <i class="fa fa-star theme-color"></i>
                            <i class="fa fa-star theme-color"></i>
                            <i class="fa fa-star theme-color"></i>
                            <i class="fa fa-star theme-color"></i>
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis ea nihil blanditiis rem voluptas vero eius magnam vel! Odio, doloremque ea quisquam optio quis repellendus quidem nam esse pariatur asperiores.</p>
                    </div>
                </div>
                <div class="d-flex ml-3 mt-4">
                    <div>
                        <img src="{{ asset('theme2-assets/img/images/pictures/Face/michael-dam-mEZ3PoFGs_k-unsplash.jpg')}}" alt="" style="width: 70px;
                        height: 70px;border-radius:50%">
                    </div>
                    <div class="bg-light ml-3 p-3">
                        <div class="d-flex flex-wrap">
                            <div class="">
                                <b>Linda Lewis</b>
                            </div>
                            <div class="ml-5">
                                September 28, 2021
                            </div>
                        </div>
                        <div class="mb-3">
                            <i class="fa fa-star theme-color"></i>
                            <i class="fa fa-star theme-color"></i>
                            <i class="fa fa-star theme-color"></i>
                            <i class="fa fa-star theme-color"></i>
                            <i class="fa fa-star theme-color"></i>
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis ea nihil blanditiis rem voluptas vero eius magnam vel! Odio, doloremque ea quisquam optio quis repellendus quidem nam esse pariatur asperiores.</p>
                    </div>
                </div>
                <section>
                    <div class="container contact-form my-5">
                        <div class="row mb-5">
                            <div class="col-md-12">
                               
                                <div class="head-1">
                                    <h1>Your Rating</h1>
                                    <div class="mb-3">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
								@if(Session::has('msg'))
								<div class="alert alert-success">{{Session::get('msg')}}</div>
								@endif
                                <form action="{{url('/review')}}" method="post"> @csrf
									<input type="hidden" value="{{$product->id}}" name="pid">
                                    <div class="form-row mt-5">
                                <div class="form-group col-md-6">
                                   <label for="" style="font: normal normal 600 24px/33px Open Sans;">Name</label>
                                    <input type="text" name="name" class="form-control" style="height: 55px;" required>
                                </div>
                                <div class="form-group col-md-6">
                                   <label for="" style="font: normal normal 600 24px/33px Open Sans;">Email</label>
                                    <input type="text" name="email" class="form-control" style="height: 55px;" required>
                                </div>
                                <div class="form-group col-md-6">
                                   <label for="" style="font: normal normal 600 24px/33px Open Sans;">Stars</label>
                                    <input type="text" name="stars" class="form-control" style="height: 55px;" value="1" placeholder="Give Stars 1-5" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="" style="font: normal normal 600 24px/33px Open Sans;">Your Review</label>
                                    <textarea name="review" id="" class="form-control" rows="10" required></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                <input type="submit" class="btn bg-theme text-bold contact-btn" value="Submit">
                            </div>
                            </div>
                            </form>
                            </div>
                        
                    </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>

<section class="my-5 papular-menu">
    <div class="container">
        <div class="text-center head-1 mt-5">
            <h1>Related Products</h1>
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