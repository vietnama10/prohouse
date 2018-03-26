<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    //
    protected $tabble = 'attributes';
    
    public function getAll() {
        return self::all();
    }
    
    public function getAttributeById($attribute_id){
        return self::find($attribute_id);
    }
}
