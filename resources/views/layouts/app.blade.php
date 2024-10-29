<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">



  

     <!-- Favicon icon -->
     <link rel="icon" href="{{url('assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{url('assets/fonts/fontawesome/css/fontawesome-all.min.css')}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{url('assets/plugins/animation/css/animate.min.css')}}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
</head>
<body>
    <div id="app">
       
        <main class="">
            @yield('content')
        </main>
    </div>
    
    <!-- Required Js -->
<script src="{{ url('assets/js/vendor-all.min.js') }}"></script>
	<script src="{{ url('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
