<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    //
    protected $tabble = 'configs';
    public $timestamps = false;
    
    public function getAll() {
        return self::all();
    }
    
    public function getConfigById($config_id){
        return self::find($config_id);
    }
    
    public function getConfigValueByTag($config_tag){
        return self::where('config_tag', $config_tag)->first()->config_value;
    }
}
