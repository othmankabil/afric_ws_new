@extends('shared_layout.header_footer')
@section('content')
<!-- LOADER -->
<div id="loader-wrapper"></div>

<div id="content-block">
    <!-- HEADER -->


    <div class="header-empty-space"></div>

    <div class="container">
        <div class="empty-space col-xs-b15 col-sm-b30"></div>
        <div class="breadcrumbs">
            <a href="#">home</a>
            <a href="#">accessories</a>
            <a href="#">gadgets</a>
            <a href="#">sport gadgets</a>
        </div>
        <div class="empty-space col-xs-b35 col-md-b70"></div>
        <div class="row">
            <div class="col-md-9 col-md-push-3">

                <div class="empty-space col-xs-b35 col-md-b70"></div>

                <div class="align-inline spacing-1">
                    <div class="h4">Sport gadgets</div>
                </div>
                <div class="align-inline spacing-1">
                    <div class="simple-article size-1">SHOWING <b class="grey">15</b> OF <b class="grey">2 358</b> RESULTS</div>
                </div>
                <div class="align-inline spacing-1 hidden-xs">
                    <a class="pagination toggle-products-view active"><img src="img/icon-14.png" alt="" /><img src="img/icon-15.png" alt="" /></a>
                    <a class="pagination toggle-products-view"><img src="img/icon-16.png" alt="" /><img src="img/icon-17.png" alt="" /></a>
                </div>
                <div class="align-inline spacing-1 filtration-cell-width-1">
                    <select class="SlectBox small">
                        <option disabled="disabled" selected="selected">Most popular products</option>
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="align-inline spacing-1 filtration-cell-width-2">
                    <select class="SlectBox small">
                        <option disabled="disabled" selected="selected">Show 30</option>
                        <option value="volvo">30</option>
                        <option value="saab">50</option>
                        <option value="mercedes">100</option>
                        <option value="audi">200</option>
                    </select>
                </div>


                <div class="empty-space col-xs-b25 col-sm-b60"></div>

                <div class="products-content">
                    <div class="products-wrapper">
                        <div class="row nopadding">
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-40.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
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
                                    <div class="price">
                                        <div class="color-selection">
                                            <div class="entry active" style="color: #a7f050;"></div>
                                            <div class="entry" style="color: #50e3f0;"></div>
                                            <div class="entry" style="color: #eee;"></div>
                                        </div>
                                        <div class="simple-article size-4"><span class="color">$630.00</span>&nbsp;&nbsp;&nbsp;<span class="line-through">$350.00</span></div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-41.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
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
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-42.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
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
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-43.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
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
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-44.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
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
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-45.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
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
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-46.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
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
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-47.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
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
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-48.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
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
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="empty-space col-xs-b35 col-sm-b0"></div>
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <a class="button size-1 style-5" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                    <span class="text">prev page</span>
                                </span>
                        </a>
                    </div>
                    <div class="col-sm-6 text-center">
                        <div class="pagination-wrapper">
                            <a class="pagination active">1</a>
                            <a class="pagination">2</a>
                            <a class="pagination">3</a>
                            <a class="pagination">4</a>
                            <span class="pagination">...</span>
                            <a class="pagination">23</a>
                        </div>
                    </div>
                    <div class="col-sm-3 hidden-xs text-right">
                        <a class="button size-1 style-5" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                    <span class="text">prev page</span>
                                </span>
                        </a>
                    </div>
                </div>

                <div class="empty-space col-xs-b35 col-md-b70"></div>
                <div class="empty-space col-md-b70"></div>
            </div>
            <div class="col-md-3 col-md-pull-9">
                <div class="h4 col-xs-b10">categories</div>
                <ul class="categories-menu transparent">
                    @foreach($categories as $categorie)
                        <li >
                            <a href="#">{{$categorie->label}}</a>
                            @if(\App\services\CategorieService::getCategorieSubs($categorie->rowid)!=null)
                                <div class="toggle"></div>
                            @foreach(\App\services\CategorieService::getCategorieSubs($categorie->rowid) as $subCategorie)
                                    <ul>
                                        <li>
                                            <a href="#">{{$subCategorie->label}}</a>
                                            @if(\App\services\CategorieService::getCategorieSubs($subCategorie->rowid)!=null)
                                                <div class="toggle"></div>
                                                @foreach(\App\services\CategorieService::getCategorieSubs($subCategorie->rowid) as $subsubCategorie)
                                                    <ul>
                                                        <li>
                                                            <a href="#">{{$subsubCategorie->label}}</a>
                                                        </li>
                                                    </ul>
                                                @endforeach
                                            @endif

                                        </li>
                                    </ul>
                                @endforeach
                            @endif

                        </li>
                    @endforeach

                </ul>


                <div class="empty-space col-xs-b25 col-sm-b50"></div>


            </div>
        </div>

    </div>

    <div class="empty-space col-xs-b15 col-sm-b45"></div>
    <div class="empty-space col-md-b70"></div>

    <!-- FOOT   ER -->
    <div class="footer-form-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xs-b10 col-lg-b0">
                    <div class="cell-view empty-space col-lg-b50">
                        <h3 class="h3 light">dont miss your chance</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-b10 col-lg-b0">
                    <div class="cell-view empty-space col-lg-b50">
                        <div class="simple-article size-3 light transparent">ONLY 200 PROMO CODES ON DISCOUNT!</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-line-form">
                        <input class="simple-input light" type="text" value="" placeholder="Your email">
                        <div class="button size-2 style-1">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="img/icon-1.png" alt=""></span>
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


<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/swiper.jquery.min.js"></script>
<script src="js/global.js"></script>

<!-- styled select -->
<script src="js/jquery.sumoselect.min.js"></script>

<!-- counter -->
<script src="js/jquery.classycountdown.js"></script>
<script src="js/jquery.knob.js"></script>
<script src="js/jquery.throttle.js"></script>

<!-- range slider -->
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>
<script>
    $(document).ready(function(){
        var minVal = parseInt($('.min-price').text());
        var maxVal = parseInt($('.max-price').text());
        $( "#prices-range" ).slider({
            range: true,
            min: minVal,
            max: maxVal,
            step: 5,
            values: [ minVal, maxVal ],
            slide: function( event, ui ) {
                $('.min-price').text(ui.values[ 0 ]);
                $('.max-price').text(ui.values[ 1 ]);
            }
        });
    });
</script>

@endsection
