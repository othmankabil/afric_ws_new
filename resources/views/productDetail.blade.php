<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="description" content="{{$product->label}},{{$product->ref}}">
    <meta property="og:description" content="{{$product->label}},{{$product->ref}}">
    <meta property="og:title" content="{{$product->label}}">
    <meta name="keywords" content="Afric Domotique,telecommunication,Domotique,matériel informatique,services informatiques,fournitures de bureau,{{$product->ref}},{{$product->label}}">
@extends('shared_layout.header_footer')

@section('content')
    <div id="loader-wrapper"></div>
    <div id="content-block">
        <div class="header-empty-space"></div>

        <div class="container">
            <div class="empty-space col-xs-b15 col-sm-b30"></div>
            <div class="breadcrumbs">
                <a href="/">home</a>
                <a href="/products?page=1">Produits</a>
                    @if(\App\services\productDetailService::getCategorieParent(\App\services\productDetailService::getProductFirstCategorie($product)) !=null)
                        <a href="/categorie/{{\App\services\productDetailService::getCategorieParent(\App\services\productDetailService::getProductFirstCategorie($product))->rowid}}">{{\App\services\productDetailService::getCategorieParent(\App\services\productDetailService::getProductFirstCategorie($product))->label}}</a>
                        <a href="/categorie/{{\App\services\productDetailService::getProductFirstCategorie($product)->rowid}}">{{\App\services\productDetailService::getProductFirstCategorie($product)->label}}</a>
                @elseif(App\services\productDetailService::getProductFirstCategorie($product) != "pas de  Categorie")
                    <a href="/categorie/{{\App\services\productDetailService::getProductFirstCategorie($product)->rowid}}">{{\App\services\productDetailService::getProductFirstCategorie($product)->label}}</a>
                @else
                <a >Pas de Categorie</a>
                @endif
            </div>
            <div class="empty-space col-xs-b25 col-sm-b50"></div>

            <div class="row">
                <div class="col-md-9 col-md-push-3">
                    @include('flash-message-devis')
                    <div class="row">
                        <div class="col-sm-6 col-xs-b30 col-sm-b0" >

                            <div class="main-product-slider-wrapper swipers-couple-wrapper">
                                <div class="swiper-container swiper-control-top" style="box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.19)">
                                     <div class="swiper-button-prev hidden"></div>
                                    <div class="swiper-button-next hidden"></div>
                                    <div class="swiper-wrapper">
                                        @foreach(\App\services\ProductService::getimages($product->ref) as $path)
                                        <div class="swiper-slide" style="padding: 5px">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="{{asset($path)}}"></div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="empty-space col-xs-b30 col-sm-b5"></div>

                                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                                    <div class="swiper-button-prev hidden"></div>
                                    <div class="swiper-button-next hidden"></div>
                                    <div class="swiper-wrapper">
                                        @foreach(\App\services\ProductService::getimages($product->ref) as $path)
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="{{asset($path)}}" alt="" width="60" height="70"/>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="simple-article size-3 grey col-xs-b5">{{\App\services\ProductService::getFirstCategorieLabel($product)}}</div>
                            <div class="h4 col-xs-b25">{{$product->label}}</div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="simple-article size-3 col-xs-b5">REFERENCE PRODUIT.: <span class="grey">{{$product->ref}}</span></div>
                                </div>
                            </div>
                            <div class="simple-article size-3 col-xs-b15">Ce produit offre des fonctionnalités de pointe pour maximiser la personnalisation de votre réseau, tout en étant optimisées pour fonctionner ensemble de manière transparente. Pour plus d'information veuillez demander de devis.</div>

                            <a class="button size-2 style-6 block col-xs-b15"  href="{{asset(\App\services\ProductService::getSinglePdf($product->ref))}}"  target="_blank">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="{{asset('img/icon-datasheet.png')}}" alt=""></span>
                                            <span class="text">Fiche technique du produit</span>
                                        </span>
                            </a>
                            <div class="row m5 col-xs-b40">
                                <div class="col-sm-12 col-xs-b10 col-sm-b0">
                                    <a class="button size-2 style-2 block open-popup" data-rel="5">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="{{asset('img/icon-devis.png')}}" alt=""></span>
                                            <span class="text">Demande Devis</span>
                                        </span>
                                    </a>
                                </div>
                                <!--div class="col-sm-6">
                                    <a class="button size-2 style-1 block noshadow" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><img src="img/icon-favoris.png" alt=""></span>
                                        <span class="text">add to favourites</span>

                                    </span>
                                    </a>
                                </div-->
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="h6 detail-data-title size-2">share:</div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="follow light">
                                        <a class="entry"  href="#"
                                           onclick="
    window.open(
      'http://www.facebook.com/sharer.php?s=100&p[title]='+encodeURIComponent('Afric Domotique') + '&p[summary]=' + encodeURIComponent('description here') + '&p[url]=' + encodeURIComponent('afric-domotique.ma') + '&p[images][0]=' + encodeURIComponent('http://www.somedomain.com/image.jpg'),
      'facebook-share-dialog',
      'width=626,height=436');
    return false;"><i class="fa fa-facebook"></i></a>
                                        <a class="entry" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="entry" href="#"><i class="fa fa-linkedin"></i></a>
                                        <a class="entry" href="#"><i class="fa fa-google-plus"></i></a>
                                        <a class="entry" href="#"><i class="fa fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="empty-space col-xs-b20"></div>
                    <div class="tabs-block">
                        <div class="tabulation-menu-wrapper">
                            <div class="tabulation-title simple-input">description</div>
                            <ul class="tabulation-toggle">
                                <li><a class="tab-menu active">Description</a></li>
                                <li><a class="tab-menu">Caractéristiques</a></li>
                            </ul>
                        </div>

                        <div class="tab-entry visible">

                            <div class="empty-space col-xs-b5"></div>
                            <div class="empty-space col-xs-b20"></div>
                            <div class="simple-article size-2">{{$product->description}}</div>
                            <div class="empty-space col-xs-b25"></div>
                        </div>

                        <div class="tab-entry">
                            <div class="empty-space col-xs-b5"></div>
                            <div class="empty-space col-xs-b20"></div>
                            <div class="simple-article size-2"><p>
                                    @foreach(explode('<br />',  nl2br($product->note)) as $note)
                                        {{ $note }}
                                    @if(!$loop->last)
                                            <br>
                                    @endif
                                    @endforeach</p></div>
                            <div class="empty-space col-xs-b25"></div>

                        </div>
                    </div>


            </div>
                <div class="col-md-3 col-md-pull-9">
                    <div class="h4 col-xs-b10">categories</div>
                    <ul class="categories-menu transparent">
                        @foreach(\App\services\CategorieService::getMotherlessCategories() as $categorie)
                            <li >
                                <a href="{{action('products_categoriesController@Categorie_products',['rowid'=>$categorie->rowid])}}">{{$categorie->label}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>





        </div>
    </div>
        <section id="produit" class="produit ">

                <div class="h4 swiper-title ml-5">PRODUITS APPARENTES</div>

            <div class="container">
                <div class="slider-wrapper hidden-pixel-y">
                    <div class="swiper-button-prev hidden"></div>
                    <div class="swiper-button-next hidden"></div>
                    <div class="swiper-container" data-breakpoints="1" data-xs-slides="1" data-sm-slides="2"
                         data-md-slides="2" data-lt-slides="4" data-slides-per-view="4">
                        <div class="swiper-wrapper">
                            @foreach(\App\services\productDetailService::getRelatedProducts($product) as $product)
                                <div class="swiper-slide" >
                                    <div class="product-shortcode style-5 " >
                                        <div class="product-label green"><a href="/categorie/{{\App\services\productDetailService::getProductFirstCategorie($product)->rowid}}">{{\App\services\productDetailService::getProductFirstCategorie($product)->label}}</a></div>
                                        <div class="preview" style="margin-bottom: 10px;padding: 10px">
                                            <div class="swiper-container" data-loop="1" data-touch="0">
                                                <div class="swiper-button-prev style-1"></div>
                                                <div class="swiper-button-next style-1"></div>
                                                <div class="swiper-wrapper" >
                                                    @foreach(\App\services\ProductService::getimages($product->ref) as $image)
                                                        <div class="swiper-slide">
                                                            <img style="height: 185px" src="{{asset($image)}}" alt="no image found" />
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bord" style="margin-bottom: 10px">
                                            <div class="title">
                                                <div class="h6"><a href="/productDetail/{{$product->rowid}}" >{{$product->ref}}</a></div>
                                            </div>
                                            <div class="description">
                                                <div class="simple-article text size-2">{{$product->label}}</div>
                                            </div>

                                        </div>
                                        <div class="preview-buttons">
                                            <div class="buttons-wrapper">
                                                <a class="button size-1 style-3" href="/productDetail/{{$product->rowid}}">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="{{asset('img/icon-1.png')}}" alt=""></span>
                                                        <span class="text">Details</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination relative-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
    <div class="popup-wrapper">
        <div class="bg-layer"></div>

        <div class="popup-content" data-rel="5">
            <div class="layer-close"></div>
            <div class="popup-container size-1">
                <div class="popup-align">
                    <h3 class="h3 text-center">Demande Devis</h3>
                    <form id="formDemande"  action="{{\Illuminate\Support\Facades\URL::to('/saveDevis')}}" method="post">
                    @csrf
                    <div class="empty-space col-xs-b30"></div>
                    <input class="simple-input" type="text"  value="" name="client_first_name"
                            placeholder="Nom" required />
                    <div class="empty-space col-xs-b10 col-sm-b10"></div>
                    <input class="simple-input" type="text" value="" name="client_last_name" placeholder="Prénom" required/>
                    <div class="empty-space col-xs-b10 col-sm-b10"></div>
                    <input class="simple-input" type="text" value="" name="client_email" placeholder="Email" required/>
                    <div class="empty-space col-xs-b10 col-sm-b10"></div>
                    <input class="simple-input" type="text" value="" name="client_phone" placeholder="Numéro de téléphone" required/>
                     <div class="empty-space col-xs-b10 col-sm-b10"></div>
                     <input class="simple-input" type="text" value="" name="client_adresse" placeholder="Adresse"/>

                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <div class="row">
                        <div class="col-sm-2 col-xs-b10 col-sm-b0">
                        </div>
                        <div class="col-sm-10 text-right">
                            <div class="button size-2 style-3" id="submitForm">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="{{asset('img/icon-4.png')}}" alt="" /></span>
                                    <span class="text">Demander</span>
                                    <input type="submit">
                                </span>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="{{$product->label}}" name="product_label">
                    <input type="hidden" value="{{$product->ref}}" name="product_ref">
                    <input type="hidden" value="{{$product->rowid}}" name="product_id">
                    </form>
                </div>
                <div class="button-close"></div>
            </div>
        </div>

    </div>
@endsection


