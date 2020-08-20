<?php

use Illuminate\Support\Facades\Route;


Route::get('/',"RoutingController@index");
Route::get('aboutUs',"RoutingController@aboutUs");
Route::get('services',"RoutingController@services");
Route::get('contact',"RoutingController@contact");

Route::get('/productDetail/{rowid}',"RoutingController@productDetail");
Route::get('products',"RoutingController@products");

