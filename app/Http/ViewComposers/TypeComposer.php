<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Type;
use App\TypeProject;

class TypeComposer
{
    protected $types;
    protected $type_projects;
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct(Type $types, TypeProject $type_projects)
    {
        $this->types = $types;
        $this->type_projects = $type_projects;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $menu_result = array();
        $types = $this->types->getAll();
        foreach($types as $type){
            $project_ids = array();
            $type_projects = $this->type_projects->getTypeProjectByTypeId($type->id);
            foreach($type_projects as $tp){
                $project_ids[] = $tp->project_id;
            }
            // add a result to array [$type_id => $type_projects]
            $menu_result[$type->id] = $project_ids;
        }
        $view->with('menu_result', $menu_result);
    }
}