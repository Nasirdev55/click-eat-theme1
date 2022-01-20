<style>
    input:focus{box-shadow: none;}
</style>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <b style="font: italic normal normal 40px/52px Open Sans;">Table</b><br>
                    <b style="font: italic normal normal 50px/82px Open Sans;">Booking</b>
                </div>
                <form action="{{url('/table-booking')}}" method="post"> @csrf
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" style="font: normal normal 600 16px/22px Open Sans;">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" required value="{{old('name')}}"
                                style="border-color:white;border-bottom:2.5px solid #707070b0;padding-left:0px" name="name">
                                @error('name')
                                <span class="invalid-feedback">
                                    {{$message}}
                                </span>
                                @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" style="font: normal normal 600 16px/22px Open Sans;">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" required value="{{old('email')}}"
                                style="border-color:white;border-bottom:2.5px solid #707070b0;padding-left:0px" name="email">
                                @error('email')
                                <span class="invalid-feedback">
                                    {{$message}}
                                </span>
                                @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" style="font: normal normal 600 16px/22px Open Sans;">Phone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" required value="{{old('phone')}}"
                                style="border-color:white;border-bottom:2.5px solid #707070b0;padding-left:0px" name="phone">
                                @error('phone')
                                <span class="invalid-feedback">
                                    {{$message}}
                                </span>
                                @enderror
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" style="font: normal normal 600 16px/22px Open Sans;">Date</label>
                            <input type="date" class="form-control @error('date') is-invalid @enderror" required value="{{old('date')}}" placeholder="dd/mm/yyyy"
                                style="border-color:white;border-bottom:2.5px solid #707070b0;padding-left:0px" name="date">
                                @error('date')
                                <span class="invalid-feedback">
                                    {{$message}}
                                </span>
                                @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" style="font: normal normal 600 16px/22px Open Sans;">Time</label>
                            <input type="time" class="form-control @error('time') is-invalid @enderror" required value="{{old('time')}}" placeholder="hh/mm"
                                style="border-color:white;border-bottom:2.5px solid #707070b0;padding-left:0px" name="time">
                                @error('time')
                                <span class="invalid-feedback">
                                    {{$message}}
                                </span>
                                @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" style="font: normal normal 600 16px/22px Open Sans;">Person</label>
                            <input type="text" class="form-control @error('persons') is-invalid @enderror" required value="{{old('persons')}}" placeholder="e.g 10"
                                style="border-color:white;border-bottom:2.5px solid #707070b0;padding-left:0px" name="persons">
                                @error('persons')
                                <span class="invalid-feedback">
                                    {{$message}}
                                </span>
                                @enderror
                        </div>
                    </div>
                </div>

                <div class="text-center my-5">
                    <button type="submit" class="btn bg-color px-5 text-white font-weight-bold">Book Now</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<header>    
    <div class="bg-dark top-bar">
        <div class="container text-white topbar">
            <div class="row" style="padding: 40px;">
                <div class="col-sm-4">
                    <b>Call Us:</b>
                    <div ><b>@if($contact) 
             {{$contact->phone1}} @else +1 111 222 3333 @endif</b></div> 
                </div>
                <div class="col-sm-4">
                    <h2 class="text-center">LOGO</h2>
                </div>
                <div class="col-sm-4 ml-auto">
                    <div class="float-right mt-2">
                        <a href="{{url('/my-wishlist')}}"><i class="fa fa-heart ml-3" style="cursor: pointer;color: white;"></i></a><a href="{{url('/cart')}}"><i class="fa fa-shopping-bag ml-3" style="cursor: pointer;color: white;"></i></a><i class="fa fa-search ml-3" style="cursor: pointer;color: white;"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-white topbar-res">
            <i class="fa fa-phone mr-3"></i><span>Call Us: @if($contact) 
             {{$contact->phone1}} @else +1 111 222 3333 @endif</span>
            <div class="float-right">
                <a href="{{url('/my-wishlist')}}"><i class="fa fa-heart ml-3" style="cursor: pointer;color: white;"></i></a><i class="fa fa-shopping-bag ml-3" style="cursor: pointer;color: white;" onclick="shopping_cart()"></i></a><i class="fa fa-search ml-3" style="cursor: pointer;color: white;"></i>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="navbar navbar-expand-lg align-items-center pb-0">
            <div class="navbar-logo">
                <h3>Logo</h3>
            </div>
            <button class="btn navbar-toggler ml-auto" data-toggle="collapse" data-target="#menu"><span class="fa fa-bars"></span></button>
            <div class="navbar-collapse collapse" id="menu">
                <ul class="navbar-nav mr-auto main-menu ml-auto mr-auto">
                    <li class="nav-item"><a href="{{url('/')}}" class="nav-link link1"><b>Home</b></a></li>
                    <li class="nav-item"><a href="{{url('/menu')}}" class="nav-link link2"><b>Menu</b></a></li>
                    <li class="nav-item"><a href="{{url('/about-us')}}" class="nav-link link3"><b>About</b></a></li>
                    <li class="nav-item"><a href="{{url('/customer-contact')}}" class="nav-link link4"><b>Customer Contact</b></a></li>
                    <li class="nav-item"><a href="{{url('/blog')}}" class="nav-link link5"><b>Blog</b></a></li>
                    <li class="nav-item"><a href="{{url('/contact-us')}}" class="nav-link link6"><b>Contact Us</b></a></li>
                    <li class="nav-item"><a href="{{url('/login')}}" class="nav-link"><b>Login</b></a></li>
                    <li class="nav-item"><a  href="#" data-toggle="modal" data-target="#exampleModalCenter" class="nav-link"><b>Reservation</b></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>