@if($contact)
<footer class="bg-dark container-fluid text-white position-relative" style="background-image: url({{ asset('theme2-assets/img/images/icons/png/30.png')}});">
    <div class="row first-row">
        <div class="col-md-2 p-0">
            <div class="f-img">
                <img src="{{ asset('theme1-assets/img/images/icons/png/Veg-pizza.png')}}" alt="">
            </div>
        </div>
        <div class="col-md-2 first-sec">
            <h1>LOGO</h1>
        </div>
        <div class="col-md-8 first-sec mt-3" style="font: normal normal bold 22px/30px open-sans;text-transform: uppercase;">
            Feel Hunger! order your like <span class="theme-color"> fast food.</span>
        </div>
    </div>
    <hr style="border:1px solid white;" class="sec-row">
    <div class="row sec-row">
        <div class="col-md-3">
            <h3 style="font: normal normal bold 18px/24px;">Address</h3>
            <p>{{$contact->address}}</p>
        </div>
        <div class="col-md-3">
            <h3 style="font: normal normal bold 18px/24px;">Book A Table</h3>
            <p>Book your table for hot and spicy fast food.</p>
            <button class="btn text-white" data-toggle="modal" data-target="#exampleModalCenter">Book Now</button>
        </div>
        <div class="col-md-3">
            <h3 style="font: normal normal bold 18px/24px;">Opening Hours </h3>
            <p>{{$contact->hours1}} <br> {{$contact->hours2}}</p>
        </div>
        <div class="col-md-3">
            <h3 style="font: normal normal bold 18px/24px;">Contact Info</h3>
            <div class="form-group input-group" style="margin-top: 1rem;">
             <p>{{$contact->email1}}</p>
             <p>{{$contact->email2}}</p>
             <p>{{$contact->phone1}}</p>
             <p>{{$contact->phone2}}</p>
            </div>
        </div>
    </div>
    
    <div class="f-img2">
    </div>
    <div style="height:50px">

    </div>
</footer>
@else
<footer class="bg-dark container-fluid text-white position-relative" style="background-image: url('assets/img/images/icons/png/30.png');">
    <div class="row first-row">
        <div class="col-md-2 p-0">
            <div class="f-img">
                <img src="{{asset('vendor-admin-assets/img/images/icons/png/Veg-pizza.png')}}" alt="">
            </div>
        </div>
        <div class="col-md-2 first-sec">
            <h1>LOGO</h1>
        </div>
        <div class="col-md-8 first-sec mt-3" style="font: normal normal bold 22px/30px open-sans;text-transform: uppercase;">
            Feel Hunger! order your like <span class="theme-color"> fast food.</span>
        </div>
    </div>
    <hr style="border:1px solid white;" class="sec-row">
    <div class="row sec-row">
        <div class="col-md-3">
            <h3 style="font: normal normal bold 18px/24px;">Address</h3>
            <p>570 8th Ave,New York, NY 10018 United States</p>
            <p class="theme-color">View Google Map</p>
        </div>
        <div class="col-md-3">
            <h3 style="font: normal normal bold 18px/24px;">Book A Table</h3>
            <p>Book your table for hot and spicy fast food.</p>
            <p class="theme-color">Make A Call</p>
        </div>
        <div class="col-md-3">
            <h3 style="font: normal normal bold 18px/24px;">Opening Hours </h3>
            <p>Monday-Friday: 8am - 4pm <br> Saturday: 9am - 5pm</p>
            <p class="theme-color">View Google Map</p>
        </div>
        <div class="col-md-3">
            <h3 style="font: normal normal bold 18px/24px;">Newsletter</h3>
            <div class="form-group input-group" style="margin-top: 1rem;">
                <input type="text" class="form-control bg-dark" name="" placeholder="Enter your email" style="background-color: none;">
                <div class="input-group-text bg-theme" style="border-radius: 0px;border:none"><i class="fa fa-paper-plane" style="color:white"></i></div>
            </div>
            <p class="theme-color">Subscribe Now</p>
        </div>
    </div>
    
    <div class="f-img2">
    </div>
    <div style="height:50px">

    </div>
</footer>
@endif