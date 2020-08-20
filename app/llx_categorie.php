<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class llx_categorie extends Model
{
    protected $table = 'llx_categorie';
    protected $primaryKey = 'rowid';

    public function llx_products()
    {
        return $this->belongsToMany(llx_product::class,'llx_categorie_product'
            ,'fk_categorie','fk_product');

    }
}
