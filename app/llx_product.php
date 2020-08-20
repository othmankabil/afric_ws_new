<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class llx_product extends Model
{
    protected $table = 'llx_product';
    protected $primaryKey = 'rowid';

    public function llx_categories()
    {
        return $this->belongsToMany(llx_categorie::class,'llx_categorie_product'
            ,'fk_product','fk_categorie');

    }
}
