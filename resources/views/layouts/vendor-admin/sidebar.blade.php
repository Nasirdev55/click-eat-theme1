<div class="page-sidebar">
            <div class="logo position-relative">
                <h3><span style="color: #ef4b23;"> Click</span>Eat</h3>
                <span onclick="document.querySelector('.page-sidebar').style.display = 'none'" class="close" style="position: absolute;right:5px;margin-bottom: 10px;"><img src="{{ asset('vendor-admin-assets/icons/Icon material-cancel (1).svg') }}" style="width:30px;height:30px" alt=""></span>
            </div>
            <div class="ps-4 link-div single-link1">
                <a href="{{url('restaurant')}}">
                    <i class="fa fa-th-large"></i><b class="ms-2 link">Dashboard</b></a>
            </div>
            <div class="ps-4 link-div single-link2">
                 <a href="{{url('restaurant/table-booking')}}">
                    <i class="fa fa-sliders"></i><b class="ms-2 link">Table Booking</b></a>
            </div>
            <div class="ps-4 link-div single-link3">
                <a href="{{url('restaurant/users')}}">
                    <i class="fa fa-sliders"></i><b class="ms-2 link">Users</b></a>
            </div>
            <div class="ps-4 link-div" data-bs-target="#menu1" data-bs-toggle="collapse" id="m1" onclick="active_link(this.id)">
                <a href="#" class="">
                    <i class="fa fa-store"></i><b class="ms-2 link">Products</b></a><i class="fa fa-angle-left m1-icon" style="position: absolute;right: 20px;"></i>
            </div>
            <div class="collapse" id="menu1">
                <div class="ps-4 link-div link-div-child">
                    <a href="{{url('restaurant/products')}}">
                    <b class="ms-2 link d-links">Products List</b></a>
                </div>
                <div class="ps-4 link-div link-div-child">
                    <a href="{{url('restaurant/products/reviews')}}">
                    <b class="ms-2 link d-links">Product Reviews</b></a>
                </div>
            </div>
            <div class="ps-4 link-div" data-bs-target="#menu2" data-bs-toggle="collapse" id="m2" onclick="active_link(this.id)">
                <a href="#" class="">
                    <i class="fa fa-clipboard-list"></i><b class="ms-2 link">Orders</b></a><i class="fa fa-angle-left m2-icon" style="position: absolute;right: 20px;"></i>
            </div>
            <div class="collapse" id="menu2">
                <div class="ps-4 link-div link-div-child">
                    <a href="{{url('restaurant/orders')}}">
                    <b class="ms-2 link d-links">Order List</b></a>
                </div>
                <div class="ps-4 link-div link-div-child">
                    <a href="{{url('restaurant/orders/complete')}}">
                    <b class="ms-2 link d-links">Order Complete</b></a>
                </div>
            </div>
            <div class="ps-4 link-div" data-bs-target="#menu3" data-bs-toggle="collapse" id="m3" onclick="active_link(this.id)">
                <a href="#" class="">
                    <i class="fa fa-credit-card"></i><b class="ms-2 link">Payments</b></a><i class="fa fa-angle-left m3-icon" style="position: absolute;right: 20px;"></i>
            </div>
            <div class="collapse" id="menu3">
                <div class="ps-4 link-div link-div-child">
                    <a href="{{url('restaurant/payments')}}">
                    <b class="ms-2 link d-links">Payments List</b></a>
                </div>
                <!--div class="ps-4 link-div link-div-child">
                    <a href="{{url('restaurant/payouts/history')}}">
                    <b class="ms-2 link d-links">Payouts History</b></a>
                </div-->
            </div>
            <div class="ps-4 link-div" data-bs-target="#menu4" data-bs-toggle="collapse" id="m4" onclick="active_link(this.id)">
                <a href="#" class="">
                    <i class="fa fa-file"></i><b class="ms-2 link">Pages</b></a><i class="fa fa-angle-left m4-icon" style="position: absolute;right: 20px;"></i>
            </div>
            <div class="collapse" id="menu4">
                <!--div class="ps-4 link-div link-div-child">
                    <a href="{{url('restaurant/pages/home')}}">
                    <b class="ms-2 link d-links">Home</b></a>
                </div-->
                <div class="ps-4 link-div link-div-child">
                    <a href="{{url('restaurant/pages/blog')}}">
                    <b class="ms-2 link d-links">Blog</b></a>
                </div>
                <div class="ps-4 link-div link-div-child">
                    <a href="{{url('restaurant/pages/about-us')}}">
                    <b class="ms-2 link d-links">About Us</b></a>
                </div>
                <div class="ps-4 link-div link-div-child">
                    <a href="{{url('restaurant/pages/contact-us')}}">
                    <b class="ms-2 link d-links">Contact Us</b></a>
                </div>
            </div>
        </div>