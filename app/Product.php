<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $tabble = 'products';
    
    public function type(){
        return $this->belongsTo('App\Type');
    }

    public function images(){
        return $this->hasMany('App\ProductImage');
    }

    public function getProductsByType($type_id){
        $products = self::where('type_id', $type_id)->take(4)->get();
        return $products;
    }
}
