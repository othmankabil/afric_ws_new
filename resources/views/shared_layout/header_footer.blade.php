<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui" />
    <meta property="og:site_name" content="Afric Domotique">
    <meta property="og:url" content="{{\Illuminate\Support\Facades\URL::current()}}">
    <meta name="language" content="fr">
    <meta name="robots" content="Index,Follow">

<!-- Google Fonts -->
<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Questrial|Raleway:700,900" rel="stylesheet">

<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/swiper.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/sumoselect.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('img/headicon.ico')}}" />

<title>Afric Domotique - Téléphonie IP, Base de Données, Vidéo et Sécurité</title>


    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/bootstrap.extension.css')}}" rel="stylesheet" type="text/css" />

</head>

<body>

    <header>
        <div class="header-top">
            <div class="content-margins">
                <div class="row">
                    <div class="col-md-4 hidden-xs hidden-sm ">

                    </div>
                    <div class="col-md-8 col-md-text-right">
                        <div class="entry hidden-xs hidden-sm"><b>Nous contacter:</b> <a
                                href="tel:+212522686834">(+212) 522 686 834</a></div>
                        <div class="entry hidden-xs hidden-sm"><b>email:</b> <a
                                href="mailto:contact@afric-domotique.ma">contact@afric-domotique.ma</a></div>
                        <div class="entry"><a class="open-popup" data-rel="1"><b>s'identifier</b></a>&nbsp; ou &nbsp;<a
                                class="open-popup" data-rel="2"><b>S'inscrire</b></a></div>

                        <div class="entry hidden-xs hidden-sm"><a href="#"><i class="fa fa-heart-o"
                                    aria-hidden="true"></i></a></div>

                        <div class="hamburger-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="content-margins">
                <div class="row">
                    <div class="col-xs-3 col-sm-1">
                        <a id="logo" href="{{action('RoutingController@index')}}"><img src="{{asset('img/logo-2.png')}}" alt="" /></a>
                    </div>
                    <div class="col-xs-9 col-sm-11 text-right">
                        <div class="nav-wrapper">
                            <div class="nav-close-layer"></div>
                            <nav>
                                <ul>

                                    <li class="{{(\App\Http\Controllers\RoutingController::$active=='index')?('active'): ('')}}">
                                        <a href="{{action('RoutingController@index')}}">Accueil</a>
                                    </li>
                                    <li class="{{(\App\Http\Controllers\RoutingController::$active=='aboutUs')?('active'): ('')}}">
                                        <a href="{{action('RoutingController@aboutUs')}}">à propos de nous</a>
                                    </li>
                                    <li class="{{(\App\Http\Controllers\RoutingController::$active=='products')?('active'): ('')}}">
                                        <a href="/products?page=1">Produits</a>
                                    </li>
                                    <li class="{{(\App\Http\Controllers\RoutingController::$active=='services')?('active'): ('')}}">
                                        <a href="{{action('RoutingController@services')}}">Services</a>
                                    </li>

                                    <li class="{{(\App\Http\Controllers\RoutingController::$active=='domotique')?('active'): ('')}}">
                                        <a href="{{action('RoutingController@domotique')}}">Domotique</a>
                                    </li>
                                    <li class="{{(\App\Http\Controllers\RoutingController::$active=='contact')?('active'): ('')}}">
                                    <a href="{{action('RoutingController@contact')}}">contact</a>
                                    </li>
                                </ul>
                                <div class="navigation-title">
                                    Navigation
                                    <div class="hamburger-icon active">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div class="header-bottom-icon toggle-search" id="searchproduct"><i class="fa fa-search" aria-hidden="true"></i></div>

                    </div>
                </div>
                <div class="header-search-wrapper">
                    <div class="header-search-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
                                    <form method="post" action="{{action('products_categoriesController@SearchQuery')}}">
                                        @csrf
                                        <div class="search-submit">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                            <input type="submit"/>
                                        </div>
                                        <input required  name="searchInput" class="simple-input style-1 "  type="text" value="" placeholder="Rechercher un produit par référence ou par son label" />
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="button-close"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="popup-wrapper">
        <div class="bg-layer"></div>

        <div class="popup-content" data-rel="1">
            <div class="layer-close"></div>
            <div class="popup-container size-1">
                <div class="popup-align">
                    <h3 class="h3 text-center">Log in</h3>
                    <div class="empty-space col-xs-b30"></div>
                    <input class="simple-input" type="text" value="" placeholder="Your email" />
                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <input class="simple-input" type="password" value="" placeholder="Enter password" />
                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-b10 col-sm-b0">
                            <div class="empty-space col-sm-b5"></div>
                            <a class="simple-link">Forgot password?</a>
                            <div class="empty-space col-xs-b5"></div>
                            <a class="simple-link">register now</a>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a class="button size-2 style-3" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="{{asset('img/icon-4.png')}}" alt="" /></span>
                                    <span class="text">submit</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="popup-or">
                        <span>or</span>
                    </div>
                    <div class="row m5">
                        <div class="col-sm-4 col-xs-b10 col-sm-b0">
                            <a class="button facebook-button size-2 style-4 block" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="{{asset('img/icon-4.png')}}" alt="" /></span>
                                    <span class="text">facebook</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-sm-4 col-xs-b10 col-sm-b0">
                            <a class="button twitter-button size-2 style-4 block" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="{{asset('img/icon-4.png')}}" alt="" /></span>
                                    <span class="text">twitter</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a class="button google-button size-2 style-4 block" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="{{asset('img/icon-4.png')}}" alt="" /></span>
                                    <span class="text">google+</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="button-close"></div>
            </div>
        </div>

        <div class="popup-content" data-rel="2">
            <div class="layer-close"></div>
            <div class="popup-container size-1">
                <div class="popup-align">
                    <h3 class="h3 text-center">register</h3>
                    <div class="empty-space col-xs-b30"></div>
                    <input class="simple-input" type="text" value="" placeholder="Your name" />
                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <input class="simple-input" type="text" value="" placeholder="Your email" />
                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <input class="simple-input" type="password" value="" placeholder="Enter password" />
                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <input class="simple-input" type="password" value="" placeholder="Repeat password" />
                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <div class="row">
                        <div class="col-sm-7 col-xs-b10 col-sm-b0">
                            <div class="empty-space col-sm-b15"></div>
                            <label class="checkbox-entry">
                                <input type="checkbox" /><span><a href="#">Privacy policy agreement</a></span>
                            </label>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a class="button size-2 style-3" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="{{asset('img/icon-4.png')}}" alt="" /></span>
                                    <span class="text">submit</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="popup-or">
                        <span>or</span>
                    </div>
                    <div class="row m5">
                        <div class="col-sm-4 col-xs-b10 col-sm-b0">
                            <a class="button facebook-button size-2 style-4 block" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="{{asset('img/icon-4.png')}}" alt="" /></span>
                                    <span class="text">facebook</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-sm-4 col-xs-b10 col-sm-b0">
                            <a class="button twitter-button size-2 style-4 block" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="{{asset('img/icon-4.png')}}" alt="" /></span>
                                    <span class="text">twitter</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a class="button google-button size-2 style-4 block" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="{{asset('img/icon-4.png')}}" alt="" /></span>
                                    <span class="text">google+</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="button-close"></div>
            </div>
        </div>


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


    <!--new home page-->
    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    @yield('content')
    </body>

   <footer id="footer" style="
   -webkit-box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.2);
    -moz-box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.4);
    box-shadow: 0px -4px 5px 0px rgba(0,0,0,0.19);">

       <div class="footer-top">
           <div class="container">
               <div class="row">

                   <div class="col-lg-3 col-md-6 footer-contact">
                       <a id="logo" href="index1.html"><img src="{{asset('img/logo-2.png')}}" alt="" /></a><br><br>
                       <p>
                           Imm. 6 Tranche 1 Secteur 1 N° 3 Hay Al Walaa Sidi Moumen , Casblanca<br><br>
                           <strong>Téléphone:</strong> (+212) 522 686 834<br>
                           <strong>Email:</strong> CONTACT@AFRIC-DOMOTIQUE.MA<br>
                       </p>
                   </div>

                   <div class="col-lg-3 col-md-6 footer-links">
                       <h4>Liens utiles</h4>
                       <ul>
                           <li><i class="bx bx-chevron-right"></i> <a href="/">ACCUEIL</a></li>
                           <li><i class="bx bx-chevron-right"></i> <a href="/aboutUs">À PROPOS DE NOUS</a></li>
                           <li><i class="bx bx-chevron-right"></i> <a href="/products?page=1">PRODUITS</a></li>
                           <li><i class="bx bx-chevron-right"></i> <a href="/services">SERVICES</a></li>
                           <li><i class="bx bx-chevron-right"></i> <a href="/domotique">DOMOTIQUE</a></li>
                           <li><i class="bx bx-chevron-right"></i> <a href="/contact">NOUS CONTACTER</a></li>
                       </ul>
                   </div>

                   <div class="col-lg-3 col-md-6 footer-links">
                       <h4>Nos Services</h4>
                       <ul>
                           <li><i class="bx bx-chevron-right"></i> <a href="/services">FORMATIONS</a></li>
                           <li><i class="bx bx-chevron-right"></i> <a href="/services">CRM </a></li>
                           <li><i class="bx bx-chevron-right"></i> <a href="/services">Service AV</a></li>
                           <li><i class="bx bx-chevron-right"></i> <a href="/services">SERVICE COMMERCIAL</a></li>
                           <li><i class="bx bx-chevron-right"></i> <a href="/services">SERVICE TECHNIQUE
                               </a></li>
                       </ul>
                   </div>

                   <div class="col-lg-3 col-md-6 footer-links">
                       <h4>Nos réseaux sociaux</h4>
                       <p>Suivez-nous sur les réseaux sociaux</p>
                       <div class="social-links mt-3">
                           <a class="twitter"><i class="bx bxl-twitter"></i></a>
                           <a class="facebook"><i class="bx bxl-facebook"></i></a>
                           <a  class="instagram"><i class="bx bxl-instagram"></i></a>
                           <a  class="linkedin"><i class="bx bxl-linkedin"></i></a>
                       </div>
                   </div>

               </div>
           </div>
       </div>

       <div class="container footer-bottom clearfix">
           <div class="copyright">
               &copy; Copyright <strong><span>AFRIC DOMOTIQUE</span></strong>. Tous les droits sont réservés
           </div>

       </div>

</footer><!-- End Footer -->
</html>
<script>
    $(document).on('click', '#searchproduct', function(){
        $('.header-search-wrapper').addClass('active');
    });
    $(document).on('click', '.header-search-wrapper .button-close', function(){
        $('.header-search-wrapper').removeClass('active');
    });
</script>
