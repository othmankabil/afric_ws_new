<!DOCTYPE html>
<html lang="fr">
<head>
@extends('shared_layout.header_footer')



@section('content')
    <!-- LOADER -->
        <div id="loader-wrapper"></div>
    <div id="content-block">

        <div class="header-empty-space"></div>
        <div class="empty-space col-xs-b35 col-md-b50"></div>

        <div class="row justify-content-center">
            <div class="col-sm-6">
            <div style="border: 2px #eee solid; padding: 15px;">
                <form method="post" action="{{route('solutions.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="input-file-wrapper">

                    <div class="simple-input" data-placeholder="Attach your resume">Charger votre Solution (PDF) </div>
                    <input name="location" id="location" type="file" onchange="$(this).parent().addClass('active').find('.simple-input').text($(this).val().split( '\\' ).pop()); if($(this).val()=='') $(this).next().click();">
                    <div class="file-remove"></div>

                    </div>

                     <div class="empty-space col-xs-b20"></div>

                     <div class="single-line-form">
                        <input name="name" id="name" class="simple-input" type="text" value="" placeholder="Nom de Soltuion ">
                        <div class="button size-2 style-3">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="img/icon-4.png" alt=""></span>
                                    <span class="text">Ajouter</span>
                                </span>
                                <input type="submit" value="">
                        </div>
                     </div>
                </form>
            </div>
                <div class="empty-space col-xs-b35 col-md-b50"></div>
            </div>
        </div>

    </div>

@endsection
