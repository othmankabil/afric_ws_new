<?php

use Illuminate\Support\Facades\Route;


Route::get('/',"RoutingController@index");
Route::get('aboutUs',"RoutingController@aboutUs");
Route::get('services',"RoutingController@services");
Route::get('contact',"RoutingController@contact");
Route::get('domotique',"RoutingController@domotique");


Route::get('/productDetail/{rowid}',"RoutingController@productDetail");
Route::get('products',"RoutingController@products");
Route::post('products',"products_categoriesController@SearchQuery");

Route::get('categorie/{rowid}',"products_categoriesController@Categorie_products");

Route::get('/sendMail',"RoutingController@sendMail");
Route::post('/saveDevis',"RoutingController@sendMail");
Route::post('/contactSendMail',"RoutingController@contactSendMail");

