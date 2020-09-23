@extends('shared_layout.header_footer')
@section('content')

    <!-- LOADER -->
    <div id="loader-wrapper"></div>

    <div id="Domotique-block">
        <!-- HEADER -->
        <div class="empty-space col-xs-b25 col-sm-b100"></div>
        <main id="main">


            <!-- ======= About Section ======= -->
            <section id="aboutD" class="aboutD">
                <div class="container">

                    <div class="row no-gutters">
                        <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
                            <div class="content">
                                <h3 id="saboutD_title"></h3>
                                <p id="saboutD_description_left">

                                </p>
                            </div>
                        </div>
                        <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
                            <div class="icon-boxes d-flex flex-column justify-content-center">
                                <div class="row">
                                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                        <i class="bx bx-receipt"></i>
                                        <h4 id="saboutD_description_title_right1"></h4>
                                        <p id="saboutD_description_right1">

                                        </p>
                                    </div>
                                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                        <i class="bx bx-cube-alt"></i>
                                        <h4 id="saboutD_description_title_right2"></h4>
                                        <p id="saboutD_description_right2"></p>
                                    </div>
                                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                        <i class="bx bx-images"></i>
                                        <h4 id="saboutD_description_title_right3"></h4>
                                        <p id="saboutD_description_right3"></p>
                                    </div>
                                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                        <i class="bx bx-shield"></i>
                                        <h4 id="saboutD_description_title_right4"></h4>
                                        <p id="saboutD_description_right4"></p>
                                    </div>
                                </div>
                            </div><!-- End .content-->
                        </div>
                    </div>

                </div>
            </section><!-- End About Section -->

            <!-- ======= Features Section ======= -->
            <section id="features" class="features " data-aos="fade-up">
                <div class="container">

                    <div class="section-title">
                        <h2 id=sfeatures_title></h2>
                        <p id="sfeatures_description"></p>
                    </div>

                    <div class="row content">
                        <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
                            <img src="img/Domotique-04.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
                            <h3 id="sfeatures_title_right1"></h3>
                            <p id="sfeatures_title_description_right1" class="desc_domotique">

                            </p>
                            <ul id="features_description_ul" class="ul_domotique_content">

                            </ul>
                        </div>
                    </div>

                    <div class="row content">
                        <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                            <img src="img/Domotique-05.jpg  " class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                            <h3 id="sfeatures_title_left"></h3>
                            <p id="sfeatures_title_description_left" class="desc_domotique">
                            </p>
                            <p id="sfeatures_description2" class="p_domotique_content">

                            </p>
                        </div>
                    </div>

                    <div class="row content">
                        <div class="col-md-5" data-aos="fade-right">
                            <img src="img/Domotique-01.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7 pt-5" data-aos="fade-left">
                            <h3 id="sfeatures_title_right2"></h3>
                            <p id="sfeatures_title_description_right2" class="desc_domotique"></p>
                            <ul id="features_description_ul1" class="ul_domotique_content">

                            </ul>
                        </div>
                    </div>
                </div>
            </section><!-- End Features Section -->

            <!-- ======= Frequently Asked Questions Section ======= -->
            <section id="why-us" class="why-us">
                <div class="container-fluid" data-aos="fade-up">

                    <div class="row">

                        <div
                            class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                            <div class="section-title">
                                <h2 id="sfaq_title"></h2>
                            </div>
                            <div class="accordion-list">
                                <ul id="swhyUs_label_ul">
                                    <ul id="swhyUs_label_ul">
                                        <li>
                                            <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>
                                            </span>Qu’est-ce que la domotique ?
                                                <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="accordion-list-1" class="collapse collapse_first_show" data-parent=".accordion-list">
                                                <p>
                                                    La domotique est la gestion intelligente de l’habitat par un ensemble d’objets
                                                    interconnectés qui regroupe trois dimensions : la sécurité, le confort et le mieux
                                                    vivre. Le pilotage de votre habitat est facile, de plus en plus intuitif selon vos
                                                    habitudes, vos besoins, et vos envies. C’est le moyen de garder la main sur votre
                                                    habitat à distance.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" class="collapse" href="#accordion-list-2"><span>
                                            </span>Comment choisir un produit domotique ?
                                                <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="accordion-list-2" class="collapse collapse_first_show" data-parent=".accordion-list">
                                                <p>
                                                    Le choix de votre produit domotique dépend essentiellement de vos besoins mais
                                                    surtout des produits que vous possédez déjà.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" class="collapse" href="#accordion-list-3"><span>
                                            </span>Comment économiser de l’énergie au sein de mon habitat ?
                                                <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="accordion-list-3" class="collapse collapse_first_show" data-parent=".accordion-list">
                                                <p>
                                                    Afin d’économiser de l’énergie au sein de votre habitat, la domotique met à votre
                                                    disposition des produits tels que : des capteurs de consommation électrique, des
                                                    prises intelligentes ou encore des capteurs de température. Ces derniers vous
                                                    permettent de faire des économies d’énergie mais également des économies
                                                    financières.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" class="collapse" href="#accordion-list-4"><span>
                                            </span>Comment contrôler mon habitat ?
                                                <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="accordion-list-4" class="collapse collapse_first_show" data-parent=".accordion-list">
                                                <p>
                                                    Afin de contrôler votre habitat, la domotique met à votre disposition des produits
                                                    tels que : des ampoules connectées et des boutons de commande à distance. Ces
                                                    derniers vous permettent d’automatiser les tâches du quotidien mais aussi de le
                                                    contrôler à distance.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" class="collapse" href="#accordion-list-5"><span>
                                            </span>Comment sécuriser mon habitat ?
                                                <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="accordion-list-5" class="collapse collapse_first_show" data-parent=".accordion-list">
                                                <p>
                                                    Afin de sécuriser votre habitat, la domotique met à votre disposition des produits
                                                    tels que : des boutons d’alerte, des caméras ou des capteurs infrarouges. Ces
                                                    derniers vous permettent de vivre en toute sérénité au sein de votre habitat et même
                                                    durant vos absences.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" class="collapse" href="#accordion-list-6"><span>
                                            </span>Les produits domotiques peuvent-ils être placés dehors ?
                                                <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="accordion-list-6" class="collapse collapse_first_show" data-parent=".accordion-list">
                                                <p>
                                                    Cela dépend des produits. Vous devez vérifier son étanchéité dans l’onglet
                                                    caractéristiques du produit.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" class="collapse" href="#accordion-list-7"><span>
                                            </span>Quelles sont les solutions pour sécuriser une personne âgée après une chute ou une hospitalisation ?
                                                <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="accordion-list-7" class="collapse collapse_first_show" data-parent=".accordion-list">
                                                <p>
                                                    Après une chute ou une hospitalisation, des signes de dépendance peuvent apparaître.
                                                    Pour remédier à cela, nous vous proposons des solutions domotique afin de sécuriser
                                                    l’habitat et de prévenir les chutes ou éventuels incidents pouvant survenir au
                                                    quotidien.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" class="collapse" href="#accordion-list-8"><span>
                                            </span>Dois-je posséder une centrale domotique pour acheter un produit ?
                                                <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="accordion-list-8" class="collapse collapse_first_show" data-parent=".accordion-list">
                                                <p>
                                                    Tout dépend du protocole du produit, ceux fonctionnant en bluetooth ou wifi peuvent
                                                    fonctionner sans centrale domotique. Tous les autres produits ont besoin d’une
                                                    centrale domotique parlant le même protocole.
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
            </section>

            <!-- ======= Services Section ======= -->
            <!--ection id="servicesNOSVALEURS" class="servicesNOSVALEURS">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>NOS VALEURS</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                             data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                <h4 class="title"><a href="">INNOVATION</a></h4>
                                <p class="description">Une dynamique créative, un désir d’imaginer et de construire
                                    l’avenir.</p>
                                <p class="description">“Ce n’est pas en améliorant la bougie qu’on a inventé l’ampoule
                                    électrique”</p>
                                <p>Niels Bohr</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                             data-aos-delay="200">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h4 class="title"><a href="">BIENVEILLANCE</a></h4>
                                <p class="description">Se soucier de chacun, veiller aux bien-être de tous.</p>
                                <p class="description">“Je pense que les gens ordinaires peuvent choisir d’être
                                    extraordinaires”</p>
                                <p>Elon Musk</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                             data-aos-delay="300">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-tachometer"></i></div>
                                <h4 class="title"><a href="">EXCELLENCE</a></h4>
                                <p class="description">Une volonté de vous offrir un service plus qu’un produit pour
                                    vous satisfaire pleinement.</p>
                                <p class="description">“Il n’y a pas de substitut à l’excellence. Pas même le succès.”
                                </p>
                                <p>Thomas Boswell</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                             data-aos-delay="400">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-layer"></i></div>
                                <h4 class="title"><a href="">HOSPITALITÉ</a></h4>
                                <p class="description">Le partage règne en maître mot, mêlant tolérance et échange pour
                                    faire ressortir le meilleur de chacun d’entre nous.</p>
                                <p class="description">“Les meilleures choses qui arrivent dans le monde de l’entreprise
                                    ne sont pas le résultat du travail d’un seul Homme. C’est le travail de toute une
                                    équipe.”</p>
                                <p>Steve Jobs</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section--><!-- End Services Section -->

        </main>

    </div>




<script>
    $(document).ready(function() {

        $.getJSON("data/domotique.json",
            function(data) {
                var tr = data.data;

                //About Us Text
                sessionData = tr.session_aboutD;
                $("#saboutD_title").html(sessionData.saboutD_title);
                $("#saboutD_description_left").html(sessionData.saboutD_description_left);
                $("#saboutD_description_title_right1").html(sessionData.saboutD_description_title_right1);
                $("#saboutD_description_right1").html(sessionData.saboutD_description_right1);
                $("#saboutD_description_title_right2").html(sessionData.saboutD_description_title_right2);
                $("#saboutD_description_right2").html(sessionData.saboutD_description_right2);
                $("#saboutD_description_title_right3").html(sessionData.saboutD_description_title_right3);
                $("#saboutD_description_right3").html(sessionData.saboutD_description_right3);
                $("#saboutD_description_title_right4").html(sessionData.saboutD_description_title_right4);
                $("#saboutD_description_right4").html(sessionData.saboutD_description_right4);
                $("#saboutD_btn_more").html(sessionData.saboutD_btn_more);
                $("#saboutD_btn_more").attr("href", sessionData.saboutD_btn_more_url);

                //features
                sessionData = tr.session_features;
                $("#sfeatures_title").html(sessionData.sfeatures_title);
                $("#sfeatures_description").html(sessionData.sfeatures_description);
                $("#sfeatures_title_right1").html(sessionData.sfeatures_title_right1);
                $("#sfeatures_title_description_right1").html(sessionData.sfeatures_title_description_right1);
                for (var i = 0; i < sessionData.sfeatures_description1.length; i++) {
                    $("#features_description_ul").append(' <li><i class="icofont-check"></i>' + sessionData
                        .sfeatures_description1[i] + '</li>');
                }
                $("#sfeatures_title_left").html(sessionData.sfeatures_title_left);
                $("#sfeatures_title_description_left").html(sessionData.sfeatures_title_description_left);
                $("#sfeatures_description2").html(sessionData.sfeatures_description2);
                $("#sfeatures_title_right2").html(sessionData.sfeatures_title_right2);
                $("#sfeatures_title_description_right2").html(sessionData.sfeatures_title_description_right2);
                for (var i = 0; i < sessionData.sfeatures_description_right2.length; i++) {
                    $("#features_description_ul1").append(' <li><i class="icofont-check"></i>' + sessionData
                        .sfeatures_description_right2[i] + '</li>');
                } //FAQ
                sessionData = tr.session_faq;
                $("#sfaq_title").html(sessionData.sfaq_title);
                var collapse_first_show = "show";
                for (var i = 0; i < sessionData.sfaq_label.length; i++) {
                    var id = "0" + (i + 1);
                    var question = sessionData.sfaq_label[i].question;
                    var answer = sessionData.sfaq_label[i].answer;
                    $("#sfaq_label_ul").append('<li>' +
                        '<a data-toggle="collapse" class="collapse" href="#faq1' + id +
                        '"><span>' + id +
                        '</span>' + question +
                        '<i class="icofont-simple-up"></i><i class="icofont-simple-up"></i></a>' +
                        '<div id="accordion-list-' + id + '" class="collapse ' + collapse_first_show +
                        '" data-parent=".accordion-list">' +
                        '<p>' +
                        answer +
                        '</p>' +
                        '</div>' +
                        '</li> ');
                    collapse_first_show = "";
                }



            });
    });
</script>
@endsection
