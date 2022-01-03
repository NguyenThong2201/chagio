@extends('layouts.main')
@section('content')
<!--/main-banner-->
<div class="w3l-main-slider position-relative" id="home">
    <div class="w3l-bannerhny-content">
        <div class="container">
            <div class="w3l-bannerhny-info">
                <h3 class="mb-md-5 mb-4">Dịch vụ đưa đón khách <a href="tel:0369100758">0369100758</a> <br> Xe 4, 7, 16, 29 chỗ( Uy Tín - Chất Lượng )</h3>
                <div class="banner-form-w3">
                    <form action="" method="post">
                        <div class="form-style-w3ls">
                            <div class="form-gd">
                                <label for="input_from">Điểm đón</label>
                                <input type="text" name="Name" placeholder="" required="required">
                            </div>
                            <div class="form-gd">
                                <label for="input_from">Điểm đến</label>
                                <input type="text" name="Name" placeholder="" required="required">
                            </div>
                            <div class="form-gd">
                                <label for="input_from">Loại xe</label>
                                <select aria-label="Default select example">
                                    <option selected>Chọn loại xe</option>
                                    <option value="4">Xe 4 chỗ</option>
                                    <option value="7">Xe 7 chỗ</option>
                                    <option value="16">Xe 16 chỗ</option>
                                    <option value="19">xe 29 chỗ</option>
                                </select>
                            </div>
                            <div class="form-gd">
                                <label for="input_from">Ngày đi</label>
                                <input type="date" name="Name" placeholder="" required="required">
                            </div>
                            <div class="form-gd">
                                <label for="input_from">Số điện thoại</label>
                                <input type="text" name="Name" placeholder="" required="required">
                            </div>
                            <div class="form-gd">
                                <label for="input_from">Gửi</label>
                                <button class="btn btn-style btn-primary"> Gửi ngay</button>
                            </div>
                        </div>
                    </form>
                    <div class="form-footer mt-3">
                            <span class="info">
                                <b>
                                    <i>Liên hệ nhanh cho</i> Dịch vụ Taxi - Grab 24/7
                                </b>Điện thoại
                                <a href="tel:0369100758">0369100758</a>
                            </span>
                    </div>
                    <!-- //Request-a-call-form -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--//main-banner-->
<!--/Client-Section-->
<section id="about" class="clients">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 pe-lg-5">
                <div class="title-content text-left">
                    <h3 class="title-w3l">DỊCH VỤ TAXI - GRAB <br>XE DU LỊCH <BR> GIÁ RẺ - UY TÍN</h3>
                </div>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4 ps-lg-5 mx-lg-0">
                <div class="pr-lg-5">
                    Với nhiều tài xế nhiều năm kinh nghiệm lái xe luôn sẵn sàng phục vụ quý khách
                    <div class="icon-box mb-3 mt-3">
                        <i class="fas fa-check-double"></i> Chuyên đưa đón khách đi Sân Bay - Ga Tàu - Bến Xe - Bệnh Viện
                    </div>
                    <div class="icon-box mb-3">
                        <i class="fas fa-check-double"></i> Sẵn sàng đưa đón quý khách về quê liên tỉnh.
                    </div>
                    <div class="icon-box mb-3">
                        <i class="fas fa-check-double"></i> Nhận đưa đón đi du lịch - dã ngoại gia đình nhóm bạn.
                    </div>
                </div>
            </div>
        </div>

        <div class="car-img mx-0 text-center">
            <img src="{{ 'assets/images/taxi-dong-nai.jpg' }}" alt="" class="img-fluid">
        </div>

    </div>
</section>
<section id="counts" class="w3lcounts">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 w3stats_info counter_grid">
                <div class="count-box">
                    <i class="fas fa-users"></i>
                    <p class="counter">960</p>
                    <p>Lượt Khách</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0 w3stats_info counter_grid">
                <div class="count-box">
                    <i class="far fa-images"></i>
                    <p class="counter">560</p>
                    <p>Chuyến đi</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 w3stats_info counter_grid">
                <div class="count-box">
                    <i class="fas fa-headset"></i>
                    <p class="counter">150</p>
                    <p>Tống Đài Hỗ Trợ</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 w3stats_info counter_grid">
                <div class="count-box">
                    <i class="fas fa-user-tie"></i>
                    <p class="counter">55</p>
                    <p>Tài Xế</p>
                </div>
            </div>

        </div>

    </div>
</section>
<!--//Counts-Section-->
<!--/Tab-section-->
<section id="tabs" class="tabs">
    <div class="container">
        <ul class="nav nav-tabs row d-flex">
            <li class="nav-item col-3">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                    <i class="fas fa-shield-alt"></i>
                    <h4 class="d-none d-lg-block">Uy Tín - Chất Lượng</h4>
                </a>
            </li>
            <li class="nav-item col-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                    <i class="fas fa-spinner"></i>
                    <h4 class="d-none d-lg-block">Linh Hoạt</h4>
                </a>
            </li>
            <li class="nav-item col-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                    <i class="fas fa-hand-holding-usd"></i>
                    <h4 class="d-none d-lg-block">Tiết Kiệm Chi Phí</h4>
                </a>
            </li>
            <li class="nav-item col-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                    <i class="fas fa-dungeon"></i>
                    <h4 class="d-none d-lg-block">Tài Xế Kinh Nghiệm</h4>
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
                <div class="row mt-5">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Dịch Vụ Taxi 24/7 Uy Tín - Chất Lượng</h3>
                        <p class="fst-italic mt-3">
                            “Chúng tôi chuyên đáp ứng nhu cầu về giá cả, chất lượng dịch vụ và sự tiện ích cho khách hàng. Giúp khách hàng tiết kiệm 20-50% giá trị chuyến đi so với thông thường.”
                        </p>
                        <ul class="mt-3">
                            <li><i class="fas fa-check-double"></i> An toàn, Sang trọng</li>
                            <li><i class="fas fa-check-double"></i> Gía trọn gói, không phát sinh</li>
                            <li><i class="fas fa-check-double"></i> Nền tảng thuê xe 4,7,16 chỗ lớn nhất Việt Nam</li>
                        </ul>
                        <p class="mt-3">
                            Với giá cả cạnh tranh và dịch vụ tài xế chuyên nghiệm. Chúng tôi rất vinh dự khi được phục vụ quý khách.
                        </p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center ps-lg-5">
                        <img src="{{ 'assets/images/thue-xe-gia-re-247.jpg' }}" alt="" class="img-fluid radius-image">
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-2">
                <div class="row mt-5">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Với 10.000 Đầu Xe Liên Kết Và Phân Phối Toàn Quốc, Gọi Là Có Xe. Chúng Tôi Luôn Linh Động Đáp Ứng Nhu Cầu Di Chuyến Của Quý Khách</h3>
                        <p class="fst-italic mt-3">
                            “Quý khách cứ gọi là sẽ có xe đưa đón”
                        </p>
                        <ul class="mt-3">
                            <li><i class="fas fa-check-double"></i> Lựa chọn xe : 4, 7, 12, 16, 24, 29, 30, 35, 45 chỗ</li>
                            <li><i class="fas fa-check-double"></i> Gọi cho chúng tôi : <a href="tel:0369100758">0369100758</a></li>
                            <li><i class="fas fa-check-double"></i> Tài xế sẽ đên đón quý khách ngay</li>
                        </ul>
                        <p class="mt-3">
                            Đội ngũ tài xế sẽ thực hiện đúng tiêu chuẩn 5k: Khẩu trang – Khử khuẩn – Khoảng cách – Không tập trung – Khai báo Y tế nhằm đảm bảo an toàn mùa dịch.
                        </p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center ps-lg-5">
                        <img src="assets/images/xe-taxi-gia-re.jpg" alt="" class="img-fluid radius-image">
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-3">
                <div class="row mt-5">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Chuyên Cung Cấp Xe 4-7-16-29-45 Chỗ Có Tài Xế Vận Chuyển, Du Lịch, Trọn Gói Giá Rẻ Và Uy Tín</h3>
                        <p class="fst-italic mt-3">
                            “Chuyên Cung Cấp Xe Du Lịch Giá Rẻ Trên Toàn Lãnh Thổ Việt Nam”
                        </p>
                        <ul class="mt-3">
                            <li><i class="fas fa-check-double"></i> Có tài xế riêng cho từng xe. Giá cả siêu rẻ</li>
                            <li><i class="fas fa-check-double"></i> Đi về quê, Du lịch, Sân bay, bệnh viện ... giá siêu cạnh tranh</li>
                            <li><i class="fas fa-check-double"></i> Đưa đón tận nơi</li>
                        </ul>
                        <p class="mt-3">
                            Chỉ 10.000 vnd /km Bao Gồm : XE + Nhiên Liệu + Tài Xế + Phí Cầu Đường + Khăn, Nước
                        </p>

                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center ps-lg-5">
                        <img src="assets/images/g3.jpg" alt="" class="img-fluid radius-image">
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-4">
                <div class="row mt-5">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Đội ngũ tài xê trên 10 năm kinh nghiệm đường dài.</h3>
                        <p class="fst-italic mt-3">
                            Rật vinh hạnh khi được phục vụ quý khách
                        </p>
                        <ul class="mt-3">
                            <li><i class="fas fa-check-double"></i> Đội ngũ tài xế sẽ thực hiện đúng tiêu chuẩn 5k trong mua dịch</li>
                            <li><i class="fas fa-check-double"></i> Đưa đón đúng giờ hẹn của quý khách</li>
                            <li><i class="fas fa-check-double"></i> Thân thiện phúc vụ khăn nước đầy đủ cho quý khách</li>
                        </ul>
                        <p class="mt-3">
                            Đội ngũ tài xế chuyên nghiệp
                        </p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center ps-lg-5">
                        <img src="{{ 'assets/images/tai-xe-taxi-247.jpg' }}" alt="" class="img-fluid radius-image">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--//abs-Section -->
<!--/Services-Section -->
<section id="services" class="services section-bg w3lpricing">
    <div class="container">
        <div class="section-title">
            <h3 class="title-w3l two mb-4">Dịch Vụ Xe 24/7</h3>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="box-wrap">
                    <div class="box-wrap-grid">
                        <div class="icon">
                            <span class="fas fa-percent"></span>
                        </div>
                        <div class="info">
                            <h4><a href="#url">Về Quê Tỉnh Lẻ</a></h4>
                            <p class="mt-3 text-dark">Đưa đón Quý Khách chi phí rẻ về quê dịp lễ tết 24/7</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-md-0 mt-4">
                <div class="box-wrap">
                    <div class="box-wrap-grid">
                        <div class="icon">
                            <span class="fas fa-exchange-alt"></span>
                        </div>
                        <div class="info">
                            <h4><a href="#url">Đưa Đón Sân Bay</a></h4>
                            <p class="mt-3 text-dark">Chuyên đưa rước Sân Bay - Ga Tàu - Bến Xe - Nhà Hàng</p>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4">
                <div class="box-wrap">
                    <div class="box-wrap-grid">
                        <div class="icon">
                            <span class="fas fa-user-friends"></span>
                        </div>
                        <div class="info">
                            <h4><a href="#url">Phục vụ cưới hỏi</a></h4>
                            <p class="mt-3 text-dark">Chuyên xe đám cưới các tỉnh thành </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="box-wrap">
                    <div class="box-wrap-grid">
                        <div class="icon">
                            <span class="fas fa-car"></span>
                        </div>
                        <div class="info">
                            <h4><a href="#url">Đưa Rước Bệnh Viện</a></h4>
                            <p class="mt-3 text-dark">Phục vụ nhu cầu đi lại của bệnh nhân và người nhà </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="box-wrap">
                    <div class="box-wrap-grid">
                        <div class="icon">
                            <span class="fas fa-trophy"></span>
                        </div>
                        <div class="info">
                            <h4><a href="#url">Du Lịch</a></h4>
                            <p class="mt-3 text-dark">Nhận đưa rước du lịch gia đình - nhóm bạn</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="box-wrap">
                    <div class="box-wrap-grid">
                        <div class="icon">
                            <span class="fas fa-headset"></span>
                        </div>
                        <div class="info">
                            <h4><a href="#url">Hỗ Trợ Toàn Quốc</a></h4>
                            <p class="mt-3 text-dark">Hãy liên hệ cho chúng tôi : <a href="tel:0369100758">0369100758</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--//Services-Section -->
<!--/Portfolio-Section -->
<section id="portfolio" class="portfolio w3l-gallery">
    <div class="container">
        <div class="section-title">
            <h3 class="title-w3l mb-2"> Hình Ảnh Xe Chúng Tôi</h3>
        </div>

        <!--/grids-grids-->
        <ul class="gallery_agile mt-4">
            <li>
                <div class="w3_agile_portfolio_grid">
                    <a href="#">
                        <img src="assets/images/xe-dich-vu.jpg" alt=" " class="img-fluid radius-image" />
                        <div class="w3layouts_news_grid_pos">
                            <div class="wthree_text">
                                <h3><i class="fas fa-search"></i></h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w3_agile_portfolio_grid mt-4">
                    <a href="#">
                        <img src="assets/images/xe-taxi-gia-re.jpg" alt=" " class="img-fluid radius-image" />
                        <div class="w3layouts_news_grid_pos">
                            <div class="wthree_text">
                                <h3><i class="fas fa-search"></i></h3>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="w3_agile_portfolio_grid">
                    <a href="#">
                        <img src="assets/images/g3.jpg" alt=" " class="img-fluid radius-image" />
                        <div class="w3layouts_news_grid_pos">
                            <div class="wthree_text">
                                <h3><i class="fas fa-search"></i></h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w3_agile_portfolio_grid mt-4">
                    <a href="#">
                        <img src="assets/images/g4.jpg" alt=" " class="img-fluid radius-image" />
                        <div class="w3layouts_news_grid_pos">
                            <div class="wthree_text">
                                <h3><i class="fas fa-search"></i></h3>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="w3_agile_portfolio_grid">
                    <a href="#">
                        <img src="assets/images/g5.jpg" alt=" " class="img-fluid radius-image" />
                        <div class="w3layouts_news_grid_pos">
                            <div class="wthree_text">
                                <h3><i class="fas fa-search"></i></h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w3_agile_portfolio_grid mt-4">
                    <a href="#">
                        <img src="assets/images/g6.jpg" alt=" " class="img-fluid radius-image" />
                        <div class="w3layouts_news_grid_pos">
                            <div class="wthree_text">
                                <h3><i class="fas fa-search"></i></h3>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
        <!--//rids-grids-->
    </div>
</section>
<!--//Portfolio-Section -->
<!--/Testimonials/Section-->
<section id="testimonials" class="w3l-clients-1 testimonials">
    <div class="container">
        <!--/testimonial-grids-->
        <div class="testimonial-row">
            <div id="owl-demo1" class="owl-testimonial owl-carousel owl-theme">
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <div class="test-img">
                                <img src="assets/images/team1.jpg" class="img-fluid" alt="client-img">
                            </div>
                            <div class="testi-des">
                                <i class="fas fa-quote-left"></i>
                                <div class="peopl align-self">
                                    <h3>Mục Tiêu</h3>
                                </div>
                            </div>
                            <blockquote>
                                Mang lại dịch vụ đưa đón tốt nhất với chi phí rẻ nhất nhưng vẫn luôn mang lại cho quý khách sự an toàn tiện lợi.
                            </blockquote>
                            <ul class="social-media-test m-0 mt-4 p-0">
                                <li><a href="https://www.facebook.com/D%E1%BB%8Bch-V%E1%BB%A5-Taxi-Grab-Gi%C3%A1-R%E1%BA%BB-2424-106446565229106" class="facebook"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#twitter" class="twitter"><span class="fab fa-twitter"></span></a>
                                </li>
                                <li><a href="#instagram" class="instagram"><span class="fab fa-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//testimonial-grids-->

    </div>
</section>
<!--//Testimonials/Section-->
<!--/contact-->
<section id="contact" class="contact">
    <div class="container">
        <div class="section-title">
            <h3 class="title-w3l mb-2">ĐỂ LẠI LỜI NHẮN</h3>
            <p class="w3conatact-p mb-4">Chúng tôi sẽ liên lạc lại cho bạn trong thời gian nhanh nhất có thế</p>
        </div>
        <div class="row">
            <div class="col-lg-5 pe-lg-5">
                <div class="row">
                    <div class="cont-details">
                        <div class="cont-top" data-aos="fade-up"
                             data-aos-duration="3000">
                            <div class="cont-left text-center">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="cont-right">
                                <h6>Địa Chỉ</h6>
                                <p>Đ. Số 2, Quảng Tiến, Trảng Bom, Đồng Nai</p>
                            </div>
                        </div>
                        <div class="cont-top margin-up" data-aos="fade-up"
                             data-aos-duration="3000">
                            <div class="cont-left text-center">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="cont-right">
                                <h6>LIÊN HỆ</h6>
                                <p><a href="tel:0369100758">0369100758</a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up" data-aos="fade-up"
                             data-aos-duration="3000">
                            <div class="cont-left text-center">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="cont-right">
                                <h6>Email</h6>
                                <p><a href="mailto:nbthong2201@mail.com" class="mail">nbthong2201@mail.com</a></p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-lg-7 mt-lg-0 mt-5" data-aos="fade-up"
                 data-aos-duration="3000">
                <form action="#" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col form-group">
                            <input type="text" class="form-control" name="w3lName" id="w3lName" placeholder="Tên" required="">
                        </div>
                        <div class="col form-group">
                            <input type="email" class="form-control" name="w3lSender" id="w3lSender" placeholder="Email" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="w3lSubject" id="w3lSubject" placeholder="Tiêu đề" required="">
                    </div>
                    <div class="form-group">
                        <textarea name="w3lMessage" class="form-control" id="w3lMessage" placeholder="Nội dung" required=""></textarea>
                    </div>
                    <div class="w3lhny-submit text-right">
                        <button type="submit" class="btn btn-primary btn-style ">Gửi</button>
                    </div>

                </form>
            </div>

        </div>
        <div class="map-iframe mt-5 pt-lg-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52701.771454572605!2d106.9911576519555!3d10.957133139483192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174e6a909993c4d%3A0x696b1a0032291ebd!2sTrang%20Bom%20district%20post!5e0!3m2!1sen!2s!4v1640531163959!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>
<!--//contact-->
@endsection
