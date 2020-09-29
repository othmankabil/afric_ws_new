<!DOCTYPE html>
<html lang="fr">
<head>
    @extends('shared_layout.header_footer')

    @section('content')
        <div class="header-empty-space"></div>
        <div class="empty-space col-xs-b35 col-md-b50"></div>
        <div class="row justify-content-center">
            <div>
                <div  style="padding: 15px; ">
                    <h1 class="h3 text-center">{{$solution->name}}</h1>
                    <div class="empty-space col-xs-b30"></div>
                    <object data='{{asset($solution->location)}}#zoom=80&fdf={{asset($solution->location)}}'
                            type='application/pdf'
                            width='700px'
                            height='600px'>
                        <p>Ce navigateur ne prend pas en charge les PDF en ligne. Veuillez télécharger le PDF pour le visualiser: <a href="urlof">telecharger le PDF</a></p>
                    </object>                </div>
            </div>
        </div>
        <div class="empty-space col-xs-b35 col-md-b70"></div>

@endsection

