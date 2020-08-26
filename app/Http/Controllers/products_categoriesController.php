<?php

namespace App\Http\Controllers;

use App\llx_categorie;
use App\services\CategorieService;
use App\services\ProductService;
use Illuminate\Http\Request;

class products_categoriesController extends Controller
{
    public function Categorie_products($rowid,$n = 2)
    {
        RoutingController::$active='products';
        $motherlessCats = CategorieService::getMotherlessCategories();
        $allProducts = ProductService::getProductsFromCategorie($rowid,$n);
        return view('products',['categories'=>$motherlessCats,'allProducts'=>$allProducts]);
    }
}
