<?php

namespace App\Http\Controllers;

use App\llx_categorie;
use App\llx_product;
use App\services\CategorieService;
use App\services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class products_categoriesController extends Controller
{
    public function Categorie_products($rowid,$n = 6)
    {
        RoutingController::$active='products';
        $motherCategorie = llx_categorie::find($rowid);
        $subCategories = CategorieService::getCategorieSubs($rowid);
        $allProducts = ProductService::getProductsFromCategorie($rowid,$n);
        $CatParent = llx_categorie::find($motherCategorie->fk_parent);
        return view('products',['mother'=>$motherCategorie,'subCategories'=>$subCategories,'allProducts'=>$allProducts,'catParent'=>$CatParent,'origin'=>'cat']);
    }
    public function SearchQuery(Request $request)
    {
        RoutingController::$active ='products';
        $motherlessCats = CategorieService::getMotherlessCategories();
        $allProducts = llx_product::query()
            ->where('ref', 'LIKE', "%{$request->input('searchInput')}%")
            ->orWhere('label', 'LIKE', "%{$request->input('searchInput')}%")
            ->paginate(6);
        return view('products',['categories'=>$motherlessCats,'allProducts'=>$allProducts,'origin'=>'home']);
    }
}
