<!--
By : Thong Nguyen
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Style Blog a Blogging Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Style Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{ asset('page/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{ asset('page/css/custom.css')}}" rel='stylesheet' type='text/css' /> 
<link href="{{ asset('page/css/style.css') }}" rel='stylesheet' type='text/css' />  
<script src="{{ asset('page/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{ asset('page/js/bootstrap.min.js')}}"></script>
<!-- animation-effect -->
<link href="{{ asset('page/css/animate.min.css')}}" rel="stylesheet"> 
<script src="{{ asset('page/js/wow.min.js')}}"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
<body>
@include('layouts.home.header')
<!-- banner -->
@include('layouts.home.banner')
    <!-- technology-left -->
<div class="technology">
    <div class="container">
        @yield('content')
        <!-- technology-right -->
        @include('layouts.home.category')
        <div class="clearfix"></div>
        <!-- technology-right -->
    </div>
</div>
@include('layouts.home.footer')
</body>
</html>