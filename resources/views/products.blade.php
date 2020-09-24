<!DOCTYPE html>
<html lang="fr">
<head>
    @if($origin == 'cat')
    <meta name="description" content="{{$mother->label}}">
    <meta property="og:description" content="{{$mother->label}}">
    <meta property="og:title" content="{{$mother->label}}">
    <meta name="keywords" content="Afric Domotique,matériel informatique,fournitures de bureau,Produits,{{$mother->label}}">
    @else
        <meta name="description" content="Produits et service d'Afric Domotique">
        <meta property="og:description" content="Produits et service d'Afric Domotique">
        <meta property="og:title" content="Produits et service d'Afric Domotique">
        <meta name="keywords" content="Afric Domotique,matériel informatique,fournitures de bureau,Produits">
    @endif
@extends('shared_layout.header_footer')
@section('content')
<!-- LOADER -->
<div id="loader-wrapper"></div>

<div class="ListProduit-block">
    <!-- HEADER -->

    <div class="header-empty-space"></div>

    <div class="container">
        <div class="empty-space col-xs-b5 col-md-b20"></div>
        <div class="breadcrumbs">
            <a href="/">home</a>
            <a href="/products?page=1">Produits</a>
            @if($origin == 'cat')
            @if($catParent != null)
            <a href="/categorie/{{$catParent->rowid}}">{{$catParent->label}}</a>
            <a href="/categorie/{{$mother->rowid}}">{{$mother->label}}</a>
            @else
                <a href="/categorie/{{$mother->rowid}}">{{$mother->label}}</a>
            @endif
            @endif
        </div>

        <div class="empty-space col-xs-b15 col-sm-b30"></div>
        <div class="row">
            <div class="col-md-9 col-md-push-3">

                <div class="align-inline spacing-1">
                    <div class="h4">Produits</div>
                </div>

                <div class="align-inline spacing-1 hidden-xs">

                </div>


                <div class="products-content">
                    <div class="products-wrapper">
                        <div class="row nopadding">
                            @foreach($allProducts as $product)
                            <div  class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        @if(\App\services\ProductService::getFirstCategorieLabel($product) != 'Pas de Categorie')
                                        <div class="simple-article size-1 color col-xs-b5"><a href="{{action('products_categoriesController@Categorie_products',['rowid'=>\App\services\productDetailService::getProductFirstCategorie($product)->rowid])}}">{{\App\services\ProductService::getFirstCategorieLabel($product)}}</a></div>
                                        @else
                                            <div class="simple-article size-1 color col-xs-b5">{{\App\services\ProductService::getFirstCategorieLabel($product)}}</div>
                                        @endif
                                    </div>
                                    <div class="preview">
                                        <a href="/productDetail/{{$product->rowid}}">
                                            <img style="height: 185px;" src="{{asset(\App\services\ProductService::getSingleImage($product->ref))}}" alt="">
                                        </a>

                                    </div>
                                    <div class="price align-content-center">
                                        <div class="simple-article size-4"><a href="/productDetail/{{$product->rowid}}">{{$product->label}}</a></div>
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
                            <a  class="button size-1 style-5"  style="pointer-events: none;color: #ccc;" href="products?page=1">
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

                            @if($allProducts->lastPage()>=2)
                                @if($allProducts->currentPage()-2>0)
                                    <a class="pagination" href="{{$allProducts->url($allProducts->currentPage()-2)}}">{{$allProducts->currentPage()-2}}</a>
                                @endif
                                @if($allProducts->currentPage()-1>0)
                                    <a class="pagination" href="{{$allProducts->url($allProducts->currentPage()-1)}}">{{$allProducts->currentPage()-1}}</a>
                                @endif
                            @for ($i = $allProducts->currentPage(); $i < $allProducts->currentPage()+3; $i++)
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
                            <a class="button size-1 style-5" style="pointer-events: none;color: #ccc;" href="products?page={{$allProducts->lastPage()}}">
                                <span class="button-wrapper">
                                    <span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                    <span class="text">next page</span>
                                </span>
                            </a>
                        @endif
                    </div>
                </div>

                <div class="empty-space col-xs-b35 col-md-b70"></div>

            </div>
            <div class="col-md-3 col-md-pull-9 listCat">
                <form method="post" action="{{action('products_categoriesController@SearchQuery')}}">
                    @csrf
                    <input required name="searchInput" class="simple-input" id="searchfield" type="text"  placeholder="Recherche Produit" />
                    <div class="search-submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="submit"/>
                    </div>

                </form>
                <div class="empty-space col-xs-b25 col-sm-b20"></div>
            @if($origin == 'home')

                <div class="h4 col-xs-b10">categories</div>
                <ul class="categories-menu transparent">
                    @foreach($categories as $categorie)
                        <li >
                            <a href="{{action('products_categoriesController@Categorie_products',['rowid'=>$categorie->rowid])}}">{{$categorie->label}}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="empty-space col-xs-b25 col-sm-b50"></div>
            @else
                   <a href="/products?page=1" id="backToLastCat">
                                <span class="button-wrapper">
                                    <span class="icon"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                    <span class="text">Categories</span>
                                </span>
                    </a>
                    <ul class="categories-menu transparent">
                        <!--a  class="button  size-1 style-5"   href="/products?page=1">
                                <span class="button-wrapper">
                                    <span class="icon"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                    <span class="text">voir plus de catégories</span>
                                </span>
                        </a-->
                            <li >
                                <a href="{{action('products_categoriesController@Categorie_products',['rowid'=>$mother->rowid])}}">{{$mother->label}}</a>
                                @if($subCategories!=null)

                                @foreach($subCategories as $subcat)
                                    <a href="{{action('products_categoriesController@Categorie_products',['rowid'=>$subcat->rowid])}}" style="padding-left: 30px">{{$subcat->label}}</a>
                                @endforeach
                                @endif
                            </li>

                    </ul>
                    <div class="empty-space col-xs-b25 col-sm-b50"></div>
            @endif
            </div>
        </div>

    </div>

    <div class="empty-space col-xs-b15 col-sm-b45"></div>
    <div class="empty-space col-md-b70"></div>

    <!-- FOOT   ER -->



</div>


<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/swiper.jquery.min.js')}}"></script>
<script src="{{asset('js/global.js')}}"></script>

<!-- styled select -->
<script src="{{asset('js/jquery.sumoselect.min.js')}}"></script>

<!-- counter -->
<script src="{{asset('js/jquery.classycountdown.js')}}"></script>
<script src="{{asset('js/jquery.knob.js')}}"></script>
<script src="{{asset('js/jquery.throttle.js')}}"></script>

<!-- range slider -->
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/jquery.ui.touch-punch.min.js')}}"></script>
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
