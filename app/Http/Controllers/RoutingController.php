<?php

namespace App\Http\Controllers;

use App\services\productDetailService;
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
    public function productDetail($rowid)
    {
        self::$active ='index';
        $product = productDetailService::getProductData($rowid);
        if($product==null)
            abort(404);
        return view('productDetail')->with('product',$product);
    }
    public function products()
    {
        return view('products');
    }
}
