<!doctype html>
<html lang="en">
  <head>
    @include('layouts.click-eat-theme2.header-links')

    <title>@yield('title')</title>
    @yield('extra_css')
  </head>
  <body>
   
    @include('layouts.click-eat-theme2.header')

   
@yield('content')
<div style="height:100px"></div>



   
     


   @include('layouts.click-eat-theme2.footer')

   @include('layouts.click-eat-theme2.footer-links')
   @yield('scripts')
  </body>
</html>