<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeProject extends Model
{
    //
    protected $tabble = 'type_projects';
    
    public function getTypeProjectByTypeId($type_id){
         return self::all()->where('type_id', $type_id);
    }
}
