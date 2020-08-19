@extends('shared_layout.header_footer')



@section('content')
    <!-- LOADER -->
    <div id="loader-wrapper"></div>

    <div id="content-block">

        <div class="header-empty-space"></div>
        <div class="empty-space col-xs-b35 col-md-b50"></div>
        <!-- ======= Services Section ======= -->

        <div class="section-title">
            <h2 id="aboutUs_title"></h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="h3 mt-3" id="session_1_title"></div>
                    <div class="title-underline left"><span></span></div>
                    <div class="simple-article size-3 grey" id="session_1_left_description"></div>
                </div>
                <div class="col-sm-7">
                    <div class="simple-article size-4">
                        <p id="session_1_right_description_p1"></p>
                        <p id="session_1_right_description_p2"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="empty-space col-xs-b35 col-md-b70"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="h3 mt-3" id="session_2_title"></div>
                    <div class="title-underline left" ><span></span></div>
                    <div class="simple-article size-3 grey" id="session_2_left_description"></div>
                </div>
                <div class="col-sm-7">
                    <div class="simple-article size-4">
                        <p id="session_2_right_description_p1"></p>
                        <p id="session_2_right_description_p2"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="empty-space col-xs-b35 col-md-b70"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="h3 mt-3" id="session_3_title"></div>
                    <div class="title-underline left" ><span></span></div>
                    <div class="simple-article size-3 grey" id="session_3_left_description"></div>
                </div>
                <div class="col-sm-7">
                    <div class="simple-article size-4">
                        <p id="session_3_right_description_p1"></p>
                        <p id="session_3_right_description_p2"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="empty-space col-xs-b35 col-md-b70"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="h3 mt-3" id="session_4_title"></div>
                    <div class="title-underline left" ><span></span></div>
                    <div class="simple-article size-3 grey" id="session_4_left_description"></div>
                </div>
                <div class="col-sm-7">
                    <div class="simple-article size-4">
                        <p id="session_4_right_description_p1"></p>
                        <p id="session_4_right_description_p2"></p>
                        <p id="session_4_right_description_p3"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="empty-space col-xs-b35 col-md-b70"></div>

    </div>

<script>
$(document).ready(function() {

    $.getJSON("data/aboutUs.json",
        function(data) {
            var aboutData = data.data;
            //Header Text
            var headernData = aboutData.aboutUs_header;
            $("#aboutUs_title").html(headernData.aboutUs_title);

            //Session Data
            var sessionData = aboutData.session_data;
            $("#session_1_title").html(sessionData[0].title);
            $("#session_1_left_description").html(sessionData[0].left_description);
            $("#session_1_right_description_p1").html(sessionData[0].right_description_1);
            $("#session_1_right_description_p2").html(sessionData[0].right_description_2);
            ///----2----
            $("#session_2_title").html(sessionData[1].title);
            $("#session_2_left_description").html(sessionData[1].left_description);
            $("#session_2_right_description_p1").html(sessionData[1].right_description_1);
            $("#session_2_right_description_p2").html(sessionData[1].right_description_2);
            ///----3----
            $("#session_3_title").html(sessionData[2].title);
            $("#session_3_left_description").html(sessionData[2].left_description);
            $("#session_3_right_description_p1").html(sessionData[2].right_description_1);
            $("#session_3_right_description_p2").html(sessionData[2].right_description_2);
            ///----2----
            $("#session_4_title").html(sessionData[3].title);
            $("#session_4_left_description").html(sessionData[3].left_description);
            $("#session_4_right_description_p1").html(sessionData[3].right_description_1);
            $("#session_4_right_description_p2").html(sessionData[3].right_description_2);
            $("#session_4_right_description_p3").html(sessionData[3].right_description_3);


        });
});
</script>
@endsection
