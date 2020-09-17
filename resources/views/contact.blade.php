@extends('shared_layout.header_footer')

@section('content')
    <!-- LOADER -->
    <div id="loader-wrapper"></div>

    <div id="content-block">
        <!-- HEADER -->
        <div class="header-empty-space"></div>
        <div class="empty-space col-xs-b35 col-md-b50"></div>
        <!-- ======= Services Section ======= -->

        <div class="section-title">
            <h2 id="service_title">Nous Contacter</h2>

        </div>
        <div class="container ">
            <div class="col-sm-3">
                <div class="icon-description-shortcode style-1">
                    <img class="icon" src="img/icon-25.png" alt="">
                    <div class="title h6">addresse</div>
                    <div class="description simple-article size-2">Imm. 6 Tranche 1 Secteur 1 N° 3 Hay Al Walaa Sidi
                        Moumen - Casablanca</div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="icon-description-shortcode style-1">
                    <img class="icon" src="img/icon-23.png" alt="">
                    <div class="title h6">Téléphone</div>
                    <div class="description simple-article size-2" style="line-height: 26px;">
                        <a href="tel:(+212) 522 686 834">(+212) 522 686 834</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="icon-description-shortcode style-1">
                    <img class="icon" src="img/icon-28.png" alt="">
                    <div class="title h6">email</div>
                    <div class="description simple-article size-2"><a
                            href="mailto:contact@afric-domotique.ma">contact@afric-domotique.ma</a></div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="icon-description-shortcode style-1">
                    <img class="icon" src="img/icon-26.png" alt="">
                    <div class="title h6">Nous suivre</div>
                    <div class="follow light">
                        <a class="entry" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="entry" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="entry" href="#"><i class="fa fa-linkedin"></i></a>
                        <a class="entry" href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="empty-space col-xs-b25 col-sm-b50"></div>
        <section class="section-bg">
            <h4 class="h4 text-center col-xs-b25">VOUS AVEZ DES QUESTIONS?</h4>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <form  method="post" action="{{\Illuminate\Support\Facades\URL::to('/contactSendMail')}}">
                        @csrf
                        <div class="row m5">
                            <div class="col-sm-6">
                                <input class="simple-input col-xs-b20" type="text" value="" placeholder="Nom" name="name" required />
                            </div>
                            <div class="col-sm-6">
                                <input class="simple-input col-xs-b20" type="text" value="" placeholder="Email" name="email" required />
                            </div>
                            <div class="col-sm-6">
                                <input class="simple-input col-xs-b20" type="text" value="" placeholder="Téléphone" name="phone" required/>
                            </div>
                            <div class="col-sm-6">
                                <input class="simple-input col-xs-b20" type="text" value="" placeholder="Sujet" name="subject" required/>
                            </div>
                            <div class="col-sm-12">
                                <textarea class="simple-input col-xs-b20" placeholder="Votre message" name="message" required></textarea>
                            </div>
                            <div class="col-sm-12">
                                <div class="text-center">
                                    <div class="button size-2 style-3">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="img/icon-4.png" alt=""></span>
                                            <span class="text">envoyer message</span>
                                            <input type="submit">
                                        </span>
                                        <input type="submit"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>
@endsection
