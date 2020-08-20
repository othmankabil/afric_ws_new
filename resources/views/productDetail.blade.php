@extends('shared_layout.header_footer')

@section('content')

    <div id="content-block">
        <div class="header-empty-space"></div>

        <div class="container">
            <div class="empty-space col-xs-b15 col-sm-b30"></div>
            <div class="breadcrumbs">
                <a href="#">home</a>
                <a href="#">accessories</a>
                <a href="#">gadgets</a>
                <a href="#">sport gadgets</a>
            </div>
            <div class="empty-space col-xs-b15 col-sm-b50"></div>
            <div class="row">
                <div class="col-md-9 col-md-push-3">
                    <div class="row">
                        <div class="col-sm-6 col-xs-b30 col-sm-b0">

                            <div class="main-product-slider-wrapper swipers-couple-wrapper">
                                <div class="swiper-container swiper-control-top">
                                    <div class="swiper-button-prev hidden"></div>
                                    <div class="swiper-button-next hidden"></div>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-5.jpg"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-5.jpg"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-6.jpg"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-7.jpg"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-8.jpg"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-9.jpg"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-10.jpg"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="simple-article size-3 grey col-xs-b5">SMART WATCHES</div>
                            <div class="h4 col-xs-b25">{{$product->label}}</div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="simple-article size-3 col-xs-b5">REFERENCE PRODUIT.: <span class="grey">{{$product->ref}}</span></div>
                                </div>
                            </div>
                            <div class="simple-article size-3 col-xs-b30">Vivamus in tempor eros. Phasellus rhoncus in nunc sit amet mattis. Integer in ipsum vestibulum, molestie arcu ac, efficitur tellus. Phasellus id vulputate erat.</div>

                            <div class="row m5 col-xs-b40">
                                <div class="col-sm-6 col-xs-b10 col-sm-b0">
                                    <a class="button size-2 style-2 block" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="img/icon-2.png" alt=""></span>
                                            <span class="text">Demande Devis</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a class="button size-2 style-1 block noshadow" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                                        <span class="text">add to favourites</span>
                                    </span>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="h6 detail-data-title size-2">share:</div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="follow light">
                                        <a class="entry" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="entry" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="entry" href="#"><i class="fa fa-linkedin"></i></a>
                                        <a class="entry" href="#"><i class="fa fa-google-plus"></i></a>
                                        <a class="entry" href="#"><i class="fa fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="empty-space col-xs-b35 col-md-b70"></div>

                    <div class="tabs-block">
                        <div class="tabulation-menu-wrapper text-center">
                            <div class="tabulation-title simple-input">description</div>
                            <ul class="tabulation-toggle">
                                <li><a class="tab-menu active">description</a></li>
                                <li><a class="tab-menu">technical specs</a></li>
                            </ul>
                        </div>

                        <div class="tab-entry visible">

                            <div class="empty-space col-xs-b25"></div>
                            <div class="h5">description</div>
                            <div class="empty-space col-xs-b20"></div>
                            <div class="simple-article size-2">{{$product->description}}</div>
                            <div class="empty-space col-xs-b25"></div>
                        </div>

                        <div class="tab-entry">
                            <div class="empty-space col-xs-b25"></div>
                            <div class="h5">watch 38mm</div>
                            <div class="empty-space col-xs-b15"></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="product-description-entry row nopadding">
                                        <div class="col-xs-6">
                                            <div class="h6">height:</div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <div class="simple-article size-2">38.6mm</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="product-description-entry row nopadding">
                                        <div class="col-xs-6">
                                            <div class="h6">width:</div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <div class="simple-article size-2">33.3mm</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="product-description-entry row nopadding">
                                        <div class="col-xs-6">
                                            <div class="h6">depth:</div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <div class="simple-article size-2">10.5mm</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="product-description-entry row nopadding">
                                        <div class="col-xs-6">
                                            <div class="h6">case:</div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <div class="simple-article size-2">40g</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="product-description-entry row nopadding">
                                        <div class="col-xs-6">
                                            <div class="h6">material:</div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <div class="simple-article size-2">Stainless Steel</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="empty-space col-xs-b25"></div>

                        </div>
                    </div>
                    <div class="empty-space col-md-b70"></div>

                </div>

            </div>



        </div>
    </div>
@endsection


