<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',"RoutingController@index");
Route::get('aboutUs',"RoutingController@aboutUs");
Route::get('services',"RoutingController@services");
Route::get('contact',"RoutingController@contact");
