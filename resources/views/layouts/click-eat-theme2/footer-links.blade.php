<script src="{{asset('theme2-assets/js/jquery/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('theme2-assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('theme2-assets/js/style.js')}}"></script>
<script>
     switch (window.location.pathname) {
    case '/main/home':
       $('.link1').addClass('active-link');
       break;
       case '/main/about-us':
       $('.link2').addClass('active-link');
       break;
       case '/main/services':
       $('.link3').addClass('active-link');
       break;
       case '/main/packages':
       $('.link4').addClass('active-link');
       break;
       case '/main/contact-us':
       $('.link5').addClass('active-link');
       break;
     }
    </script>