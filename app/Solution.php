<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{

         protected $fillable = [
                 'name', 'location','created_at','updated_at'
                   ];
}
