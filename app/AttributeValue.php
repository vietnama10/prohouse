<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    //
    protected $tabble = 'attribute_values';
    
    /**
     * return an AttributeValue
     */
    public static function getAttrValByAttrIdAndProId($attribute_id, $product_id){
        $attribute_value = self::where('product_id', $product_id)->where('attribute_id', $attribute_id)->first();
        return $attribute_value;
    }
    /**
     * return Array of
     * AttributeValue
     */
    public function getAllAttrValOfProduct($produc_id){
        $attribute_value = self::where('product_id', $product_id)->get();
        return $attribute_value;
    }
}
