<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('layouts.vendor-admin.header-links')
    @yield('header-extra-links')
    <style>
        #preloader{color: white;width: 100%;height:100%;background-color: white;z-index: 9999;position: absolute;top:0;left:0;bottom:0;right:0;}
    </style>
</head>
<body>
    <!--div id="preloader">
        <div class="d-flex align-items-center min-h-screen justify-content-center">
            <img src="{{asset('vendor-admin-assets/img/loader.gif')}}" alt="">
        </div>
    </div-->
    <div class="page-wrapper">
            @include('layouts.vendor-admin.sidebar')
        <div class="page">
            @include('layouts.vendor-admin.topbar')
            <div class="page-content">
                @yield('content')
            </div>
        </div>
    </div>
    @include('layouts.vendor-admin.footer-links')
    @yield('footer-extra-links')
    <!--script type="text/javascript">
    $(document).ready(function() {
        $("#preloader").remove();
    });
</script-->
</body>
</html>