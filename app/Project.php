<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $tabble = 'projects';
    
    public function getProjectByID($project_id){
        return self::find($project_id);
    }
}
