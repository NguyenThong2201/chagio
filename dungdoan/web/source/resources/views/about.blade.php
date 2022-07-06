@extends('layouts.users.index')
@section('title', 'Quảng Cáo Dũng Đoàn')
@section('page', 'index')
@section('content')
<!--/inner-page-->
<div class="inner-banner py-5 pb-sm-0">
    <section class="w3l-breadcrumb text-left py-sm-5 pb-0">
        <div class="container">
            <div class="w3breadcrumb-gids">
                <div class="w3breadcrumb-right">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="{{route('home.page')}}">Trang Chủ</a></li>
                        <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Giới Thiệu</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
</div>
<!--//inner-page-->
<!-- /content-6-main-->
<section class="w3l-content-6 py-5">
    <div class="container py-md-5 HomePageServices">
        <div class="content-info-in row">
            <div class="content-gd col-lg-6 text-left pe-lg-5">
                <h6 class="title-subw3hny mb-1 text-left">About Us</h6>
                <h3 class="title-w3l">
                    Who We Are</h3>
                <h5 class="w3sub-text my-3">
                    We're in this business since 1975 and We provide the best insdustrial services
                </h5>
                <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio.suscipit totam animi
                    consequatur saepe.Ea consequuntur illum
                    facere aperiam sequi optio consectetur adipisicing elit.suscipit totam animi.</p>
                <p class="mt-3">Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio.suscipit totam animi
                    consequatur saepe.Ea consequuntur illum
                    facere aperiam sequi optio consectetur adipisicing elit.suscipit totam animi.</p>
                <div class="w3banner-content-btns">
                    <a href="about.html" class="btn btn-style btn-outline-dark mt-lg-5 mt-4">Read More </a>
                </div>
            </div>
            <div class="content-gd col-lg-6 mt-lg-0 mt-5">
                <img src="assets/images/ab.jpg" alt="" class="img-fluid radius-image">
            </div>

        </div>
    </div>
</section>
<!--//content-6-main-->

<!--/w3l-subscribe-->
<section class="w3l-subscribe-content w3l-passion-mid-sec">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 subscribe-content-right two p-0">
            </div>
            <div class="col-lg-6 subscribe-content-left p-5">
                <div class="subscribe p-5">
                    <div class="title-content-two text-left">
                        <h6 class="title-subw3hny mb-1 text-left">What We Offer</h6>
                        <h3 class="title-w3l mb-3">
                            Providing Personalized and High Quality Services</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio.suscipit totam animi
                        consequatur saepe.Ea consequuntur illum
                        facere aperiam sequi optio consectetur adipisicing elit.</p>
                    <div class="subscribe-cat">
                        <div class="subscribe-cat-gd">
                            <a href="#" class="subscribe-cat-link">Architecture</a>
                            <p class="">Lorem ipsum viverra feugiat. Pellen tesque libero justo.</p>
                        </div>
                        <div class="subscribe-cat-gd">
                            <a href="#" class="subscribe-cat-link">Renovation</a>
                            <p class="">Lorem ipsum viverra feugiat. Pellen tesque libero justo.</p>
                        </div>
                        <div class="subscribe-cat-gd">
                            <a href="#" class="subscribe-cat-link">Construction</a>
                            <p class="">Lorem ipsum viverra feugiat. Pellen tesque libero justo.</p>
                        </div>
                        <div class="subscribe-cat-gd">
                            <a href="#" class="subscribe-cat-link">Modern Tools</a>
                            <p class="">Lorem ipsum viverra feugiat. Pellen tesque libero justo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//w3l-subscribe-->
<!--/team-sec-->
<section class="w3l-team-main team py-5" id="team">
    <div class="container py-lg-5">
        <div class="title-content text-center">
            <h6 class="title-subw3hny mb-1">Our Team</h6>
            <h3 class="title-w3l">Who Worked With Us.</h3>
        </div>
        <div class="row team-row">
            <div class="col-lg-4 col-6 team-wrap mt-lg-5 mt-4">
                <div class="team-member text-center">
                    <div class="team-img">
                        <img src="assets/images/team1.jpg" alt="" class="radius-image">
                    </div>
                    <a href="#url" class="team-title">Lawrence Petrie</a>
                    <div class="team-details text-center mt-3">
                        <div class="socials mt-20">
                            <a href="#url">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                            <a href="#url">
                                <span class="fab fa-twitter"></span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end team member -->
            <div class="col-lg-4 col-6 team-wrap mt-lg-5 mt-4">
                <div class="team-member text-center">
                    <div class="team-img">
                        <img src="assets/images/team2.jpg" alt="" class="radius-image">
                    </div>
                    <a href="#url" class="team-title">Jack Peters</a>
                    <div class="team-details text-center mt-3">
                        <div class="socials mt-20">
                            <a href="#url">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                            <a href="#url">
                                <span class="fab fa-twitter"></span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end team member -->
            <div class="col-lg-4 col-6 team-wrap mt-lg-5 mt-4">
                <div class="team-member text-center">
                    <div class="team-img">
                        <img src="assets/images/team3.jpg" alt="" class="radius-image">
                    </div>

                    <a href="#url" class="team-title">Anna Phillips</a>
                    <div class="team-details text-center mt-3">
                        <div class="socials mt-20">
                            <a href="#url">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                            <a href="#url">
                                <span class="fab fa-twitter"></span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!--//team-sec-->

<!--/w3l-project-->
<!-- /home-page-video-popup-->
<section class="w3l-index5 py-5" id="join">
    <div class="container py-md-5 py-3">
        <div class="row">
            <div class="col-lg-7 video-info pe-lg-5">
                <div class="title-content">
                    <h6 class="title-subw3hny">Join with Us</h6>
                    <h3 class="title-w3l two mb-3">Want to Join?</h3>
                    <p class="pe-lg-5">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel.Lorem ipsum dolor sit, amet consectetur elit.</p>

                </div>
            </div>
            <div class="col-lg-5 history-info align-self">
                <div class="w3banner-content-btns d-sm-flex justify-content-end">
                    <a href="about.html" class="btn btn-style btn-primary mt-lg-5 mt-4 me-sm-3">Read More </a>
                    <a href="contact.html" class="btn btn-style transparant-btn btn-primary mt-lg-5 mt-4 me-2">Contact Us </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//w3l-project-->
<!--/tabs-faqs-->
<!-- faq section -->
<div class="w3l-faq-block py-5" id="faq">
    <div class="container content-gd py-lg-5">
        <div class="faqw3content text-left">
            <h6 class="title-subw3hny mb-1 text-left">Ask by Client</h6>
            <h3 class="title-w3l mb-4">Frequently Asked Questions</h3>
        </div>
        <div class="row align-items-center mt-3">
            <div class="col-lg-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h4 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                01. Question Number
                                one?
                            </button>
                        </h4>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste
                                natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                                eaque ipsa quae ab illo inventore veritatis et quasi architecto beat vitaedicta
                                sunt explicabo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h4 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                02.Question Number
                                two?
                            </button>
                        </h4>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste
                                natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                                eaque ipsa quae ab illo inventore veritatis et quasi architecto beat vitaedicta
                                sunt explicabo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h4 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                03.Question Number
                                three?
                            </button>
                        </h4>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste
                                natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                                eaque ipsa quae ab illo inventore veritatis et quasi architecto beat vitaedicta
                                sunt explicabo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h4 class="accordion-header" id="headingFourth">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">
                                04.Question Number
                                Fourth?
                            </button>
                        </h4>
                        <div id="collapseFourth" class="accordion-collapse collapse" aria-labelledby="headingFourth" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste
                                natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                                eaque ipsa quae ab illo inventore veritatis et quasi architecto beat vitaedicta
                                sunt explicabo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h4 class="accordion-header" id="headingFifth">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="false" aria-controls="collapseThree">
                                05.Question Number
                                Fifth?
                            </button>
                        </h4>
                        <div id="collapseFifth" class="accordion-collapse collapse" aria-labelledby="headingFifth" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste
                                natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                                eaque ipsa quae ab illo inventore veritatis et quasi architecto beat vitaedicta
                                sunt explicabo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h4 class="accordion-header" id="headingSixth">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixth" aria-expanded="false" aria-controls="collapseSixth">
                                06.Question Number
                                Sixth?
                            </button>
                        </h4>
                        <div id="collapseSixth" class="accordion-collapse collapse" aria-labelledby="headingSixth" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste
                                natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                                eaque ipsa quae ab illo inventore veritatis et quasi architecto beat vitaedicta
                                sunt explicabo.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- //faq section -->
@endsection
