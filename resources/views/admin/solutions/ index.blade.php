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

            <div class="container">
                <table class="cart-table">
                    <thead >
                    <tr>
                        <th style="	text-align: center;">Nom de solution</th>
                        <th style="	text-align: center;">fichier pdf</th>
                        <th style="	text-align: center;">date de creation</th>
                        <th style="	text-align: center;">date de la dernière mise à jour</th>
                        <th style="	text-align: center;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($solutions as $solution)
                    <tr>
                        <td data-title=" "><h6 class="h6"><a href="#">{{$solution->name}}</a></h6></td>
                        <td data-title="fichier pdf: "> <a class="button size-2 style-6 block col-xs-b15"  href="{{asset($solution->location)}}"  target="_blank">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="{{asset('img/icon-datasheet.png')}}" alt=""></span>
                                            <span class="text">Fiche technique du produit</span>
                                        </span>
                            </a></td>
                        <td data-title="date de creation ">{{$solution->created_at}}</td>
                        <td data-title="date de la dernière mise à jour: ">{{$solution->updated_at}}</td>
                        <td data-title="">
                            <div class="button-close"></div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
                    <div class="empty-space col-xs-b35 col-md-b50"></div>

        </div>

@endsection
