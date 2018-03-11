<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $tabble = 'products';
    
    public function images(){
        return $this->hasMany('App\ProductImage');
    }
}
