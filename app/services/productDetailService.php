<?php


namespace App\services;


use App\llx_product;

class productDetailService
{
    public static function getProductData($id)
    {
        return llx_product::find($id);
    }
}
