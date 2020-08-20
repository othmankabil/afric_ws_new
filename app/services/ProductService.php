<?php


namespace App\services;


class ProductService
{
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
        $exist = Storage::disk('images_url')->exists('ProductRef1');
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
}
