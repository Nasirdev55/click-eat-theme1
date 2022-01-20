<div class="page-topbar">
                <div class="ms-4">
                    <i class="fa fa-bars res-bars" onclick="document.querySelector('.page-sidebar').style.display = 'block'"></i>
                </div>
                <div class="me-auto ms-4">
                    <span id="title"> Dashboard </span>
                </div>
                <i class="ti-search mx-4"></i>
                <div class="">
                    <i class="fa fa-bell"></i>
                </div>
                <div class="me-4">
                <div class="dropdown" id="user-menu">
  <a href="#" class="nav-link" onclick="dropdown()" type="button">
    <i class="fa fa-angle-down"></i> ClickEat <img src="{{ asset('super-admin-assets/img/images/pictures/abdulla-m-uTaSlu2Jfsg-unsplash.jpg') }}" alt="" style="width: 34px;height:34px;border-radius:50%;margin-left:10px">
</a>
  <div class="dropdown-menu" id="user-menu-links">
    <a class="dropdown-item" href="#" onclick="document.querySelector('#vendor-logout').submit()"><form action="{{url('/logout')}}" id="vendor-logout" method="post">@csrf</form>Logout</a>
  </div>
</div>
                </div>
            </div>