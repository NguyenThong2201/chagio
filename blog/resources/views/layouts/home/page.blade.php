<!--
By : Thong Nguyen
-->
<!DOCTYPE HTML>

<html>
<head>
    <title>Sửa chữa điện nước tại TP HỒ CHÍ MINH | Điện Nước Đạt Dương</title>
    <link rel="canonical" href="http://diennuocdatduong.com/" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Chuyên sửa chữa, thi công hệ thống điện nước ở TP Hồ Chi Minh" />
    <meta property="og:title" content="Dien Nuoc Dat Duong - Sửa chữa, thi công hệ thống điện nước." />
    <meta property="og:site_name" content="Chuyên xứ lý sự cổ điện nước"/>
    <meta property="og:url" content="http://diennuocdatduong.com/" />
    <meta name="description" content="Sửa chữa, xứ lí sự cổ điện nước nhà ở, điện nước trường học, điện nước chung cư,..Cung cấp thiết bị điện - nước tại TP HỒ CHI MINH uy tín chất lượng." />
    <meta name="robots" content="INDEX,FOLLOW" />
    <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{ asset('page/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="{{ asset('page/css/custom.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('page/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link rel="icon" href="https://bonamatcha.vn/wp-content/uploads/2017/10/favicon-300x300.png" sizes="32x32">
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