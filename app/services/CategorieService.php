<?php


namespace App\services;


use App\llx_categorie;

class CategorieService
{
    public static $rowIdd ;

    public  function getCategorieFamily($rowId)
    {
        self::$rowIdd = $rowId;
        $mysubCategorie = llx_categorie::find($rowId);
        $siblingCategories = llx_categorie::where('fk_parent','=',$mysubCategorie->fk_parent)->get();
        $subsubCategories = llx_categorie::where('fk_parent','=',$mysubCategorie->rowid)->get();
        $c = $siblingCategories->filter(function($item) {
            return $item->rowid != self::$rowIdd  ;
        });
        $subCatParent = llx_categorie::find($mysubCategorie->fk_parent);
        return [$mysubCategorie,$subsubCategories,$c,$subCatParent];
    }

    public static function getCategorieSubs($catid)
    {
        $subs = llx_categorie::where('fk_parent','=',$catid)->get();
        //tcheck if a catgorie has no sub categories,if it doesnt it returns a Null
        if(!$subs->isEmpty())
            return $subs;
        return null;
    }

    //returns all Categories of the database
    public static function getAllCategories()
    {
        return llx_categorie::all();
    }

    //returns All Categories with no parents
    public static function getMotherlessCategories()
    {
        $categories = llx_categorie::where('fk_parent','=',0)->get();
        if(!$categories->isEmpty())
            return $categories;
        return null;
    }


}
