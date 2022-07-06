<!-- top header -->
<section class="w3l-top-header py-3">
    <div class="container">
        <div class="d-grid main-top">
            <div class="top-header-left">
                <ul class="info-top-gridshny">
                    <li class="info-grid">
                        <div class="info-icon"><span class="far fa-clock"></span></div>
                        <div class="info-text">
                            <p>Thứ 2 - Thứ 7 08:00 - 20:00</p>
                            <p>Chủ Nhật - Đóng Cửa</p>
                        </div>

                    </li>
                    <li class="info-grid">
                        <div class="info-icon"><span class="fas fa-phone-alt"></span></div>
                        <div class="info-text">
                            <p><a href="tel:0908654486">0908654486</a></p>
                            <p><a href="tel:0908654482">0908654482</a></p>
                        </div>

                    </li>
                    <li class="info-grid">
                        <div class="info-icon"><span class="fas fa-map-marker-alt"></span></div>
                        <div class="info-text">
                            <p>469 Lê Văn Khương</p>
                            <p>P.Hiệp Thành - Q.12 - TP.HCM</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="top-header-right text-lg-right">
                <ul>
                    <li>
                        <a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- //top header -->

<!--/Header-->
<header id="site-header" class="">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
            <h1><a class="navbar-brand pe-xl-5 pe-lg-4" href="{{route('home.page')}}">
                    QUẢNG CÁO DŨNG ĐOÀN
                </a></h1>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home.page')}}">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about.page') }}">Giới Thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services.page') }}">Dịch Vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.page') }}">Liên Hệ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
