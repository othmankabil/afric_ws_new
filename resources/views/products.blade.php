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
                    <div class="h4">Produits</div>
                </div>

                <div class="align-inline spacing-1 hidden-xs">
                    <a class="pagination toggle-products-view active"><img src="img/icon-14.png" alt="" /><img src="img/icon-15.png" alt="" /></a>
                    <a class="pagination toggle-products-view"><img src="img/icon-16.png" alt="" /><img src="img/icon-17.png" alt="" /></a>
                </div>




                <div class="empty-space col-xs-b25 col-sm-b60"></div>

                <div class="products-content">
                    <div class="products-wrapper">
                        <div class="row nopadding">
                            @foreach($allProducts as $product)
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">{{\App\services\ProductService::getFirstCategorieLabel($product)}}</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset(\App\services\ProductService::getSingleImage($product->ref))}}" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="productDetail/{{$product->rowid}}">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                            <span class="text">learn more</span>
                                                        </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price align-content-center">
                                        <div class="simple-article size-4">{{$product->label}}</div>
                                    </div>

                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                </div>

                <div class="empty-space col-xs-b35 col-sm-b0"></div>
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        @if($allProducts->onFirstPage())
                            <a class="button size-1 style-5" href="products?page=1">
                                <span class="button-wrapper">
                                    <span class="icon"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                    <span class="text">previous page</span>
                                </span>
                            </a>
                        @else
                            <a class="button size-1 style-5" href="{{$allProducts->previousPageUrl()}}">
                                <span class="button-wrapper">
                                    <span class="icon"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                    <span class="text">prev page</span>
                                </span>
                            </a>
                        @endif


                    </div>
                    <div class="col-sm-6 text-center">
                        <div class="pagination-wrapper">
                            <a class="pagination" href="products?page=1">1</a>
                            <span class="pagination">...</span>
                            @if($allProducts->lastPage()>=2)
                            @for ($i = $allProducts->currentPage(); $i < $allProducts->currentPage()+5; $i++)
                                    @break($i>$allProducts->lastPage())
                                <a class="pagination {{ $i==$allProducts->currentPage()?'active':'' }}" href="{{$allProducts->url($i)}}">{{$i}}</a>
                            @endfor
                            @endif
                            <span class="pagination">...</span>
                            <a class="pagination" href="{{$allProducts->url($allProducts->lastPage())}}">{{$allProducts->lastPage()}}</a>
                        </div>
                    </div>
                    <div class="col-sm-3 hidden-xs text-right">
                        @if($allProducts->hasMorePages())
                        <a class="button size-1 style-5" href="{{$allProducts->nextPageUrl()}}">
                                <span class="button-wrapper">
                                    <span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                    <span class="text">next page</span>
                                </span>
                        </a>
                        @else
                            <a class="button size-1 style-5" href="products?page={{$allProducts->lastPage()}}">
                                <span class="button-wrapper">
                                    <span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                    <span class="text">next page</span>
                                </span>
                            </a>
                        @endif
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
                            <a href="{{action('products_categoriesController@Categorie_products',['rowid'=>$categorie->rowid])}}">{{$categorie->label}}</a>
                            @if(\App\services\CategorieService::getCategorieSubs($categorie->rowid)!=null)
                                <div class="toggle"></div>
                            @foreach(\App\services\CategorieService::getCategorieSubs($categorie->rowid) as $subCategorie)
                                    <ul>
                                        <li>
                                            <a href="{{action('products_categoriesController@Categorie_products',['rowid'=>$subCategorie->rowid])}}">{{$subCategorie->label}}</a>
                                            @if(\App\services\CategorieService::getCategorieSubs($subCategorie->rowid)!=null)
                                                <div class="toggle"></div>
                                                @foreach(\App\services\CategorieService::getCategorieSubs($subCategorie->rowid) as $subsubCategorie)
                                                    <ul>
                                                        <li>
                                                            <a href="{{action('products_categoriesController@Categorie_products',['rowid'=>$subsubCategorie->rowid])}}">{{$subsubCategorie->label}}</a>
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
