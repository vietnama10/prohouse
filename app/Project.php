<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $tabble = 'projects';
    
    public function getAll(){
        return self::all();
    }
    
    public function getProjectById($project_id){
        return self::find($project_id);
    }
}
