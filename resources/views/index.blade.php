@extends('shared_layout.header_footer')

@section('content')

    <div id="content-block">


        <div class="header-empty-space"></div>
        <!-- BODY -->
        <section id="hero" class="d-flex align-items-center">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                         data-aos="fade-up" data-aos-delay="200">
                        <h1 id="sheader_title_header"></h1>
                        <h2 id="sheader_description_header"></h2>
                        <div class="d-lg-flex">
                            <a id="sheader_btn_produit" href="" class="btn-get-started scrollto"></a>
                            <a id="sheader_btn_video_url" href="" class="venobox btn-watch-video" data-vbtype="video"
                               data-autoplay="true"><text id="sheader_btn_video_text"></text> <i
                                    class="icofont-play-alt-2"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                        <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section>

        <!-- END BODY -->
        <!-- MAIN PAGE -->
        <main id="main">

            <!-- ======= Cliens Section ======= -->
            <section id="cliens" class="cliens ">
                <div class="container">

                    <div class="row" data-aos="zoom-in">

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                        </div>

                    </div>

                </div>
            </section><!-- End Cliens Section -->

            <!-- ======= About Us Section ======= -->
            <section id="about" class="about section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2 id="saboutUs_title"></h2>
                    </div>

                    <div class="row content">
                        <div class="col-lg-6">
                            <p id="saboutUs_description_left">

                            </p>
                            <ul id="saboutUs_ul_text">
                            </ul>
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0">
                            <p id="saboutUs_description_right">
                            </p>
                            <a id="saboutUs_btn_more" href="#" class="btn-learn-more"></a>
                        </div>
                    </div>

                </div>
            </section><!-- End About Us Section -->

            <!-- ======= Why Us Section ======= -->
            <section id="why-us" class="why-us ">
                <div class="container-fluid" data-aos="fade-up">

                    <div class="row">

                        <div
                            class="col-lg-8 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                            <div class="content">
                                <h3><strong id="swhyUs_title"></strong></h3><br>
                                <p id="swhyUs_description">
                                </p>
                            </div>

                            <div class="accordion-list">
                                <ul id="swhyUs_label_ul">

                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-4 align-items-stretch order-1 order-lg-2 img"
                             style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in"
                             data-aos-delay="150">&nbsp;</div>
                    </div>

                </div>
            </section><!-- End Why Us Section -->


            <!-- ======= Services Section ======= -->
            <section id="services" class="services section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2 id="sServices_title"></h2>
                        <p id="sServices_description"></p>
                    </div>
                    <div class="slider-wrapper">

                        <a class="swiper-button-next visible-lg" id="service_more"></a>
                        <div class="row" id="service_slide">

                        </div>
                    </div>
                </div>

            </section><!-- End Services Section -->

            <!-- ======= Produit Section ======= -->
            <section id="produit" class="produit ">
                <div class="section-title">
                    <h2>Nouvelles Produits </h2>
                </div>
                <div class="container">
                    <div class="slider-wrapper hidden-pixel-y">
                        <div class="swiper-button-prev hidden"></div>
                        <div class="swiper-button-next hidden"></div>
                        <div class="swiper-container" data-breakpoints="1" data-xs-slides="1" data-sm-slides="2"
                             data-md-slides="2" data-lt-slides="3" data-slides-per-view="3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-shortcode style-5">
                                        <div class="product-label green">best price</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye"
                                                                                        aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="preview">
                                            <div class="swiper-container" data-loop="1" data-touch="0">
                                                <div class="swiper-button-prev style-1"></div>
                                                <div class="swiper-button-next style-1"></div>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="img/product-90.jpg" alt="" />

                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="img/product-64.jpg" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-animate">
                                            <div class="title">
                                                <div class="shortcode-rate-wrapper">
                                                    <div class="rate-wrapper align-inline">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                            </div>
                                            <div class="description">
                                                <div class="simple-article text size-2">Mollis nec consequat at In
                                                    feugiat molestie tortor a malesuada</div>
                                            </div>
                                            <div class="price">
                                                <div class="simple-article size-4 dark">$630.00</div>
                                            </div>
                                        </div>
                                        <div class="preview-buttons">
                                            <div class="buttons-wrapper">
                                                <a class="button size-2 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                        <span class="text">Add To Cart</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-shortcode style-5">
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye"
                                                                                        aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="preview">
                                            <div class="swiper-container" data-loop="1" data-touch="0">
                                                <div class="swiper-button-prev style-1"></div>
                                                <div class="swiper-button-next style-1"></div>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="img/product-91.jpg" alt="" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="img/product-64.jpg" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-animate">
                                            <div class="title">
                                                <div class="shortcode-rate-wrapper">
                                                    <div class="rate-wrapper align-inline">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                            </div>
                                            <div class="description">
                                                <div class="simple-article text size-2">Mollis nec consequat at In
                                                    feugiat molestie tortor a malesuada</div>
                                            </div>
                                            <div class="price">
                                                <div class="simple-article size-4 dark">$630.00</div>
                                            </div>
                                        </div>
                                        <div class="preview-buttons">
                                            <div class="buttons-wrapper">
                                                <a class="button size-2 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                        <span class="text">Add To Cart</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-shortcode style-5">
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye"
                                                                                        aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="preview">
                                            <div class="swiper-container" data-loop="1" data-touch="0">
                                                <div class="swiper-button-prev style-1"></div>
                                                <div class="swiper-button-next style-1"></div>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="img/product-92.jpg" alt="" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="img/product-64.jpg" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-animate">
                                            <div class="title">
                                                <div class="shortcode-rate-wrapper">
                                                    <div class="rate-wrapper align-inline">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                            </div>
                                            <div class="description">
                                                <div class="simple-article text size-2">Mollis nec consequat at In
                                                    feugiat molestie tortor a malesuada</div>
                                            </div>
                                            <div class="price">
                                                <div class="simple-article size-4 dark">$630.00</div>
                                            </div>
                                        </div>
                                        <div class="preview-buttons">
                                            <div class="buttons-wrapper">
                                                <a class="button size-2 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                        <span class="text">Add To Cart</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-shortcode style-5">
                                        <div class="product-label green">best price</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye"
                                                                                        aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="preview">
                                            <div class="swiper-container" data-loop="1" data-touch="0">
                                                <div class="swiper-button-prev style-1"></div>
                                                <div class="swiper-button-next style-1"></div>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="img/product-90.jpg" alt="" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="img/product-64.jpg" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-animate">
                                            <div class="title">
                                                <div class="shortcode-rate-wrapper">
                                                    <div class="rate-wrapper align-inline">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                            </div>
                                            <div class="description">
                                                <div class="simple-article text size-2">Mollis nec consequat at In
                                                    feugiat molestie tortor a malesuada</div>
                                            </div>
                                            <div class="price">
                                                <div class="simple-article size-4 dark">$630.00</div>
                                            </div>
                                        </div>
                                        <div class="preview-buttons">
                                            <div class="buttons-wrapper">
                                                <a class="button size-2 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                        <span class="text">Add To Cart</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-shortcode style-5">
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye"
                                                                                        aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="preview">
                                            <div class="swiper-container" data-loop="1" data-touch="0">
                                                <div class="swiper-button-prev style-1"></div>
                                                <div class="swiper-button-next style-1"></div>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="img/product-91.jpg" alt="" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="img/product-64.jpg" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-animate">
                                            <div class="title">
                                                <div class="shortcode-rate-wrapper">
                                                    <div class="rate-wrapper align-inline">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                            </div>
                                            <div class="description">
                                                <div class="simple-article text size-2">Mollis nec consequat at In
                                                    feugiat molestie tortor a malesuada</div>
                                            </div>
                                            <div class="price">
                                                <div class="simple-article size-4 dark">$630.00</div>
                                            </div>
                                        </div>
                                        <div class="preview-buttons">
                                            <div class="buttons-wrapper">
                                                <a class="button size-2 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                        <span class="text">Add To Cart</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-shortcode style-5">
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye"
                                                                                        aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="preview">
                                            <div class="swiper-container" data-loop="1" data-touch="0">
                                                <div class="swiper-button-prev style-1"></div>
                                                <div class="swiper-button-next style-1"></div>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="img/product-92.jpg" alt="" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="img/product-64.jpg" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-animate">
                                            <div class="title">
                                                <div class="shortcode-rate-wrapper">
                                                    <div class="rate-wrapper align-inline">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div class="h6 animate-to-green"><a href="#">modern beat nine</a></div>
                                            </div>
                                            <div class="description">
                                                <div class="simple-article text size-2">Mollis nec consequat at In
                                                    feugiat molestie tortor a malesuada</div>
                                            </div>
                                            <div class="price">
                                                <div class="simple-article size-4 dark">$630.00</div>
                                            </div>
                                        </div>
                                        <div class="preview-buttons">
                                            <div class="buttons-wrapper">
                                                <a class="button size-2 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                        <span class="text">Add To Cart</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination relative-pagination"></div>
                        </div>
                    </div>
                </div>
            </section><!-- End Produit Section -->

        </main><!-- End #main -->
        <div class="footer-form-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xs-b10 col-lg-b0">
                        <div class="cell-view empty-space col-lg-b50">
                            <h4>Abonnez-vous maintenant et recevez des offres spéciales.</h4>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-line-form">
                            <input class="simple-input light" type="email" value="" placeholder="Insérez votre email">
                            <div class="button size-2 style-1">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="img/icon-4.png" alt=""></span>
                                    <span class="text">submit</span>
                                </span>
                                <input type="submit" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script  type="text/javascript">
        $(document).ready(function() {

            $.getJSON('data/home.json',
                function(data) {
                    var tr = data.data;
                    //Header Text
                    var sessionData = tr.session_header;
                    $("#sheader_title_header").html(sessionData.sheader_title_header);
                    $("#sheader_description_header").html(sessionData.sheader_description_header);
                    $("#sheader_btn_produit").html(sessionData.sheader_btn_produit);
                    $("#sheader_btn_produit").attr("href", sessionData.sheader_btn_produit_url);
                    $("#sheader_btn_video_text").html(sessionData.sheader_btn_video_text);
                    $("#sheader_btn_video_url").attr("href", sessionData.sheader_btn_video_url);

                    //About Us Text
                    sessionData = tr.session_aboutUs;
                    $("#saboutUs_title").html(sessionData.saboutUs_title);
                    $("#saboutUs_description_left").html(sessionData.saboutUs_description_left);
                    $("#saboutUs_description_right").html(sessionData.saboutUs_description_right);
                    $("#saboutUs_btn_more").html(sessionData.saboutUs_btn_more);
                    $("#saboutUs_btn_more").attr("href", sessionData.saboutUs_btn_more_url);
                    for (var i = 0; i < sessionData.saboutUs_li_text.length; i++) {
                        $("#saboutUs_ul_text").append(' <li><i class="ri-check-double-line"></i>' + sessionData
                            .saboutUs_li_text[i] + '</li>');
                    }

                    //Why US
                    sessionData = tr.session_whyUs;
                    $("#swhyUs_title").html(sessionData.swhyUs_title);
                    var collapse_first_show="show";
                    $("#swhyUs_description").html(sessionData.swhyUs_description);
                    for (var i = 0; i < sessionData.swhyUs_label.length; i++) {
                        var id = "0" + (i + 1);
                        var question = sessionData.swhyUs_label[i].question;
                        var answer = sessionData.swhyUs_label[i].answer;
                        $("#swhyUs_label_ul").append('<li>' +
                            '<a data-toggle="collapse" class="collapse" href="#accordion-list-'+id+'"><span>' + id +
                            '</span>' + question +
                            '<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>' +
                            '<div id="accordion-list-'+id+'" class="collapse '+collapse_first_show+'" data-parent=".accordion-list">' +
                            '<p>' +
                            answer +
                            '</p>' +
                            '</div>' +
                            '</li> ');
                        collapse_first_show="";
                    }
                    //Services
                    sessionData = tr.session_services;
                    $("#sServices_title").html(sessionData.sServices_title);
                    $("#sServices_description").html(sessionData.sServices_description);
                    $("#service_more").attr("href", sessionData.sServices_url);
                    for (var i = 0; i < sessionData.sServices_label.length; i++) {
                        var title = sessionData.sServices_label[i].title;
                        var description = sessionData.sServices_label[i].description;
                        var logo = sessionData.sServices_label[i].logo;
                        var url = sessionData.sServices_url;
                        $("#service_slide").append(
                            '<div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"' +
                            'data-aos-delay="100">' +
                            '<div class="icon-box">' +
                            '<div class="icon"><i class="' + logo + '"></i></div>' +
                            '<h4><a href="' + url + '">' + title + '</a></h4>' +
                            '<p>' +
                            description +
                            '</p>' +
                            '</div>' +
                            '</div>');
                    }
                });
        });
    </script>
@endsection


