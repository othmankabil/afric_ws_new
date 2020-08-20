<?php


namespace App\services;


class CategorieService
{
    public static $rowIdd ;

    public  function subcategories($rowId)
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

    public function getCategorieProducts($catId)
    {

    }
}
