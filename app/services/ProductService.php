<?php


namespace App\services;


use App\llx_categorie;
use App\llx_ecm_files;
use App\llx_product;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Self_;
use PhpParser\Node\Stmt\Break_;

class ProductService
{
    public static   $skipValue=0;
    public static function check_image($image_url)
    {
        $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief','jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];
        $explodeImage = explode('.', $image_url);
        $extension = end($explodeImage);
        //returns true if file given is an image
        return (in_array($extension, $imageExtensions));
    }
    public static function getimages($productRef)
    {
        $image_path_array= array();
        //tcheck if directory with name of product reference exist in 'produit'
        $exist = Storage::disk('images_url')->exists($productRef);
        if ($exist)
        {
            $image_rows = llx_ecm_files::where('filepath','=','produit/'.$productRef)->get();
            foreach ($image_rows as $image_row)
            {
                if(self::check_image($image_row->filename))
                {
                    array_push($image_path_array,$image_row->filepath.'/'.$image_row->filename);
                }
            }
            return $image_path_array;
        }
        return $image_path_array;
    }

    public static function getSingleImage($productRef)
    {
        $image_path = null;

        //check if directory with name of product reference exist in 'produit'
        $exist = Storage::disk('images_url')->exists($productRef);

        if ($exist)
        {
            $image_row_count = llx_ecm_files::where('filepath','=','produit/'.$productRef)->count();
            $image_row= llx_ecm_files::where('filepath','=','produit/'.$productRef)->skip(self::$skipValue)->first();

            //check if first row is an image
            if(self::check_image($image_row->filename))
            {
                $image_path = $image_row->filepath.'/'.$image_row->filename;
                self::$skipValue=0;
                return $image_path;
            }
            //if its not an image we skip it and retrieve the next value
            else
            {
                if (self::$skipValue<$image_row_count)
                {
                    ++Self::$skipValue;
                    return self::getSingleImage($productRef);
                }
                return $image_path;
            }
        }
        return $image_path;
    }
    public static function getAlProducts($itemsNumber)
    {
        $productsByDate = llx_product::orderBy('datec','desc')->paginate($itemsNumber);
        if(!$productsByDate->isEmpty())
            return $productsByDate;
        return null;
    }

    public static function getFirstCategorieLabel(llx_product $prod)
    {
       $first =  $prod->llx_categories->first();
       if($first != null)
            return $first->label;
       return 'Pas de Categorie';
    }

    //add
    public static function getProductsFromCategorie($rowid,$n)
    {
        $categorie = llx_categorie::find($rowid);
        return $categorie->llx_products()->paginate($n);
    }

    }
