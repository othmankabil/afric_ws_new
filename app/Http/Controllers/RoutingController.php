<?php

namespace App\Http\Controllers;

use App\services\CategorieService;
use App\services\productDetailService;
use App\services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Mail;


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

    public function products($n = 10)
    {
        self::$active ='products';
        $motherlessCats = CategorieService::getMotherlessCategories();
        $allProducts = ProductService::getAlProducts($n);
        return view('products',['categories'=>$motherlessCats,'allProducts'=>$allProducts]);
    }
    public function  sendMail(Request   $request)
    {
       // print_r($request->input("client_first_name"));
        $to_name = $request->input("client_first_name")." ".$request->input("client_last_name");
        $to_email = $request->input("client_email");
        $info = array("name"=>$to_name, "body"=>"");
        Mail::send('sendMail', $info, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('Afric Domotique Devis');
            $message->from('marketing@afric-domotique.ma','Afric Domotique');
        });
    }
}
