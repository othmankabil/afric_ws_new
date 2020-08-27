<?php

namespace App\Http\Controllers;

use App\llx_categorie;
use App\services\CategorieService;
use App\services\ProductService;
use Illuminate\Http\Request;

class products_categoriesController extends Controller
{
    public function Categorie_products($rowid,$n = 5)
    {
        RoutingController::$active='products';
        $motherCategorie = llx_categorie::find($rowid);
        $subCategories = CategorieService::getCategorieSubs($rowid);
        $allProducts = ProductService::getProductsFromCategorie($rowid,$n);
        return view('products',['mother'=>$motherCategorie,'subCategories'=>$subCategories,'allProducts'=>$allProducts,'origin'=>'cat']);
    }
}
