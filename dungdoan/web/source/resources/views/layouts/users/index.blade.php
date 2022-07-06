
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Quảng Cáo Dũng Đoàn - Bảng Hiệu Quảng Cáo TP Hồ Chí Minh </title>
    <!--/google-fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,400;0,600;0,700;0,800;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <!--//google-fonts -->
    <!--/Template-CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-starter.css')}}">
    <!--//Template-CSS -->
</head>

<body>

@include('layouts.users.header')
<!--//Header-->
@yield('content')
@include('layouts.users.footer')
<div class="fix_tel">
    <div class="ring-alo-phone ring-alo-green ring-alo-show" id="ring-alo-phoneIcon" style="right: 170px; bottom: 0px;">
        <div class="ring-alo-ph-circle"></div>
        <div class="ring-alo-ph-circle-fill"></div>
        <div class="ring-alo-ph-img-circle">
            <a id="HyperLinkgoi"><img id="Imagegoi" class="lazy" src="{{ asset('assets/images/goi.png')}}" alt="gọi ngay cty quảng cáo nội thất Dũng Đoàn"></a>


        </div>
    </div>
    <div class="tel">
        <a id="HyperLinkgoi2" title="GỌI NGAY 0908654486" href="tel:0908654486"><p class="fone">GỌI 0908654486</p></a>
    </div>
</div>
<!-- Template JavaScript -->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('assets/js/theme-change.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/twitter-bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/popper.min.js')}}"></script>

<!-- MENU-JS -->
<script>
    $(window).on("scroll", function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });

</script>
<!-- //MENU-JS -->

<!-- disable body scroll which navbar is in active -->
<script>
    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });

</script>
<!-- //disable body scroll which navbar is in active -->
<!-- //bootstrap -->
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

</body>

</html>
