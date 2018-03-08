<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    protected $tabble = 'types';
    
    public function getAll(){
        return self::all();
    }
    
    public function getTypeById($type_id){
        return self::find($type_id);
    }
}
