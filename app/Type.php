<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    protected $tabble = 'types';
    
    public function typeprojects(){
        return $this->hasMany('App\TypeProject');
    }
    
    public function products(){
        return $this->hasMany('App\Product');
    }
    
    public function getAll(){
        return self::all();
    }
    
    public function getTypeById($type_id){
        return self::find($type_id);
    }
}
