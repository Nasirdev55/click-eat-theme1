@extends('layouts.click-eat-theme2.master')
@section('title')
Contact Us
@stop
@section('content')



<section class="page-title">
    <div class="h-container text-white text-center">
        <h1 class="text-white text-center" style="font: italic normal normal 50px/63px rage;
                letter-spacing: 0px;">Contact Us</h1>
         <b>Home / Contact</b>
    </div>
</section>
@if($contact)
<section class="contact-us my-4">
    <div class="container">
    
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card shadow p-3 center">
                    <img src="{{ asset('theme2-assets/img/images/icons/Icon%20metro-location.svg')}}" alt="">
                    <div class="mt-5">
                    <b>RESTURENT ADDRESS</b>
                    <p>{{$contact->address}}</p>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card shadow p-3 center">
                    <img src="{{ asset('theme2-assets/img/images/icons/Icon%20material-phone-android.svg')}}" alt="">
                    <div class="mt-5">
                    <b>PHONE NUMBER</b>
                    <p>{{$contact->phone1}}</p>
                    <p>{{$contact->phone2}}</p>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card shadow p-3 center">
                    <img src="{{ asset('theme2-assets/img/images/icons/Icon%20material-email.svg')}}" alt="">
                    <div class="mt-5">
                    <b>EMAIL ADDRESS</b>
                    <p>{{$contact->email1}}</p>
                    <p>{{$contact->email2}}</p>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card shadow p-3 center">
                    <img src="{{ asset('theme2-assets/img/images/icons/Icon%20material-timer.svg')}}" alt="">
                    <div class="mt-5">
                    <b>RESTURENTS HOURS</b>
                    <p>{{$contact->hours1}}</p>
                    <p>{{$contact->hours2}}</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@else
<section class="contact-us my-4">
    <div class="container">
    
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card shadow p-3 center">
                    <img src="{{ asset('theme2-assets/img/images/icons/Icon%20metro-location.svg')}}" alt="">
                    <div class="mt-5">
                    <b>RESTURENT ADDRESS</b>
                    <p>Demo address # 16240 SW 107th Place, Miami, Florida</p>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card shadow p-3 center">
                    <img src="{{ asset('theme2-assets/img/images/icons/Icon%20material-phone-android.svg')}}" alt="">
                    <div class="mt-5">
                    <b>PHONE NUMBER</b>
                    <p>Mobile: +1 111 222 3333</p>
                    <p>Phone: +1 111 222 3333</p>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card shadow p-3 center">
                    <img src="{{ asset('theme2-assets/img/images/icons/Icon%20material-email.svg')}}" alt="">
                    <div class="mt-5">
                    <b>EMAIL ADDRESS</b>
                    <p>Info@clickeat.com.au</p>
                    <p>Clickeat@hotmail.com</p>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card shadow p-3 center">
                    <img src="{{ asset('theme2-assets/img/images/icons/Icon%20material-timer.svg')}}" alt="">
                    <div class="mt-5">
                    <b>RESTURENTS HOURS</b>
                    <p>Monday-Friday: 08:00am-06:00pm</p>
                    <p>Saturday-Sunday: 08:00am-10:00pm</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<section>
    <div class="container contact-form">
        <div class="row mb-5">
            <div class="col-md-12">
               
                <div class="head-1 text-center">
                    <h1>Send Message</h1>
                </div>
                @if(Session::has('msg'))
                     <div class="alert alert-primary mt-3">{{Session('msg')}}</div>
                     @endif
                <form action="{{url('/message')}}" method="post">@csrf
                    <div class="form-row mt-5">
                <div class="form-group col-md-6">
                   
                    <input type="text" class="form-control bg-light border-0" placeholder="First Name" name="fname" required>
                </div>
                <div class="form-group col-md-6">
                   
                    <input type="text" class="form-control bg-light border-0" placeholder="Last Name" name="lname" required>
                </div>
                <div class="form-group col-md-6">
                   
                    <input type="text" class="form-control bg-light border-0" placeholder="Phone Number" name="phone" required>
                </div>
                 <div class="form-group col-md-6">
                   
                    <input type="text" class="form-control bg-light border-0" placeholder="Email" name="email" required>
                </div>
                <div class="form-group col-md-12">
                    
                    <textarea name="message" id="" class="form-control bg-light border-0" rows="10" placeholder="Message" required></textarea>
                </div>
                <div class="col-md-12 text-center">
                <input type="submit" class="btn bg-theme text-bold contact-btn" value="Send Message">
            </div>
            </div>
            </form>
            </div>
        
    </div>
    </div>
</section>
@stop
