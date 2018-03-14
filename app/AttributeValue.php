<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    //
    protected $tabble = 'attribute_values';
    
    public function getAttrValByAttrIdAndProId($attr_id, $pro_id){
        $attribute_value = self::where('product_id', $pro_id)->where('attribute_id', $attr_id)->get();
        return $attribute_value;
    }
}
