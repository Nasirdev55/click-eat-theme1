<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ClickEat</title>

    <!-- Scripts -->
    <script src="{{ asset('bootstrap5/js/bootstrap.min.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('bootstrap5/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('auth/style.css') }}" rel="stylesheet">
    <style>
        .form-group{margin-top: 1rem;}
        .form-group input:focus{outline: none;box-shadow: none;}
    </style>
</head>
<body>

<div style="position: relative;min-height:100vh;align-items:center;display:flex;justify-content:center">
        @yield('content')
</div>
</body>
</html>
