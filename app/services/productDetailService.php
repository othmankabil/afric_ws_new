<?php


namespace App\services;


use App\llx_categorie;
use App\llx_product;

class productDetailService
{
    public static function getProductData($id)
    {
        return llx_product::find($id);
    }
    public static function getProductFirstCategorie($prod)
    {
        $mother =  $prod->llx_categories->first();
        if($mother != null)
        {
           return $mother;
        }
        return 'pas de  Categorie';
    }
    public static function getCategorieParent($mother)
    {
        $CatParent = llx_categorie::find($mother->fk_parent);
        if($CatParent != null)
            return $CatParent;
        return null;
    }

    public static function getRelatedProducts($prod)
    {
        $mother = self::getProductFirstCategorie($prod);
        $CatParent = self::getCategorieParent($mother);
        if($CatParent !=null)
        {
            $categoriesubs = CategorieService::getCategorieSubs($CatParent->rowid);
            $mergedProductsCollection = collect();
            if($categoriesubs != null)
            {
                foreach ($categoriesubs as $categoriesub)
                {
                    $mergedProductsCollection = $mergedProductsCollection->concat($categoriesub->llx_products);
                }
                return $mergedProductsCollection;
            }
            else
            {
                $categorie = llx_categorie::find($CatParent->rowid);
                return $categorie->llx_products;
            }
        }
        else{
            $categoriesubs = CategorieService::getCategorieSubs($mother->rowid);
            $mergedProductsCollection = collect();
            if($categoriesubs != null)
            {
                foreach ($categoriesubs as $categoriesub)
                {
                    $mergedProductsCollection = $mergedProductsCollection->concat($categoriesub->llx_products);
                }
                return $mergedProductsCollection;
            }
            else
            {
                $categorie = llx_categorie::find($mother->rowid);
                return $categorie->llx_products;
            }
        }

    }
}
