<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class RoutingController extends Controller
{
    static $active ;

    public function index()
    {
         self::$active ='index';
        return view('index');
    }

    public function aboutUs()
    {
        self::$active ='aboutUs';
        return view('aboutUs');
    }
    public function services()
    {
        self::$active ='services';
        return view('services');
    }
    public function contact()
    {
        self::$active ='contact';
        return view('contact');
    }
}
