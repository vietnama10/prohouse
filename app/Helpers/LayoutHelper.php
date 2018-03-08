<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Helpers;

use App\TypeProject;
class LayoutHelper{
    protected $type_projects;
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
        $type_projects = new TypeProject();
        $this->type_projects = $type_projects;
    }

}
