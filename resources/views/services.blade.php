<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="description" content="services d'afric Domotique">
    <meta property="og:description" content="services d'afric Domotique">
    <meta property="og:title" content="services d'afric Domotique">
    <meta name="keywords" content="FORMATION DE VOS ÉQUIPES,CRM FIABLE, ÉVOLUTIVE ET SÉCURISÉE,SERVICE APRÈS VENTE PROFESSIONNEL,SERVICE COMMERCIAL,SERVICE TECHNIQUE">
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
            <h2 id="service_title"></h2>
        </div>
        <div class="container">
            <div class="row vertical-aligned-columns">
                <div class="col-sm-5 col-xs-b30 col-sm-b0">
                    <img class="image-thumbnail" id="session_1_img" src="img/service-02.jpg" alt="" />
                </div>
                <div class="col-sm-7">
                    <div class="simple-article size-5">
                        <h4 class="h4" id="session_1_title"></h4>
                        <p id="session_1_description_p1"></p>
                        <p id="session_1_description_p2"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="empty-space col-xs-b35 col-md-b70"></div>
        <div class="container">
            <div class="row vertical-aligned-columns">
                <div class="col-sm-5 col-xs-b30 col-sm-b0">
                    <img class="image-thumbnail" id="session_1_img" src="img/Service-01.jpg" alt="" />
                </div>
                <div class="col-sm-7">
                    <div class="simple-article size-5">
                        <h4 class="h4" id="session_2_title"></h4>
                        <p id="session_2_description_p1"></p>
                        <p id="session_2_description_p2"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="empty-space col-xs-b35 col-md-b70"></div>
        <div class="container">
            <div class="row vertical-aligned-columns">
                <div class="col-sm-5 col-xs-b30 col-sm-b0">
                    <img class="image-thumbnail" id="session_1_img" src="img/service-03.jpg" alt="" />
                </div>
                <div class="col-sm-7">
                    <div class="simple-article size-5">
                        <h4 class="h4" id="session_3_title"></h4>
                        <p id="session_3_description_p1"></p>
                        <p id="session_3_description_p2"></p>
                        <p id="session_3_description_p3"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="empty-space col-xs-b35 col-md-b70"></div>
        <div class="container">
            <div class="row vertical-aligned-columns">
                <div class="col-sm-5 col-xs-b30 col-sm-b0">
                    <img class="image-thumbnail" id="session_1_img" src="img/service-05.jpg" alt="" />
                </div>
                <div class="col-sm-7">
                    <div class="simple-article size-5">
                        <h4 class="h4" id="session_4_title"></h4>
                        <p id="session_4_description_p1"></p>
                        <p id="session_4_description_p2"></p>
                        <p id="session_4_description_p3"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="empty-space col-xs-b35 col-md-b70"></div>
        <div class="container">
            <div class="row vertical-aligned-columns">
                <div class="col-sm-5 col-xs-b30 col-sm-b0">
                    <img class="image-thumbnail" id="session_1_img" src="img/service-04.jpg" alt="" />
                </div>
                <div class="col-sm-7">
                    <div class="simple-article size-5">
                        <h4 class="h4" id="session_5_title"></h4>
                        <p id="session_5_description_p1"></p>
                        <p id="session_5_description_p2"></p>
                        <p id="session_5_description_p3"></p>

                    </div>
                </div>
            </div>
        </div>
        <div class="empty-space col-xs-b35 col-md-b70"></div>

    </div>




<script>
$(document).ready(function() {

    $.getJSON("data/services.json",
        function(data) {
            var AllData= data.data;
            //Header Text
            var headernData = AllData.services_header;
            $("#service_title").html(headernData.title);

            //session ---1
            var services_data = AllData.services_data;
            $("#session_1_title").html(services_data[0].title);
            $("#session_1_description_p1").html(services_data[0].description_1);
            $("#session_1_description_p2").html(services_data[0].description_2);

            //-------------2--------------------
            $("#session_2_title").html(services_data[1].title);
            $("#session_2_description_p1").html(services_data[1].description_1);
            $("#session_2_description_p2").html(services_data[1].description_2);
            //-------------3--------------------
            $("#session_3_title").html(services_data[2].title);
            $("#session_3_description_p1").html(services_data[2].description_1);
            $("#session_3_description_p2").html(services_data[2].description_2);
            $("#session_3_description_p3").html(services_data[2].description_3);
             //-------------4--------------------
            $("#session_4_title").html(services_data[3].title);
            $("#session_4_description_p1").html(services_data[3].description_1);
            $("#session_4_description_p2").html(services_data[3].description_2);
            $("#session_4_description_p3").html(services_data[3].description_3);
              //-------------5--------------------
            $("#session_5_title").html(services_data[4].title);
            $("#session_5_description_p1").html(services_data[4].description_1);
            $("#session_5_description_p2").html(services_data[4].description_2);
            $("#session_5_description_p3").html(services_data[4].description_3);
        });
});
</script>
@endsection
