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

class MenuComposer
{
    protected $_types;
    protected $_type_projects;
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct(Type $types, TypeProject $type_projects)
    {
        $this->_types = $types;
        $this->_type_projects = $type_projects;
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
        $types = $this->_types->getAll()->where('is_active', '=', 1);
        foreach($types as $type){
            $project_ids = array();
            $type_projects = $this->_type_projects->getTypeProjectByTypeId($type->id);
            foreach($type_projects as $tp){
                $project_ids[] = $tp->project_id;
            }
            // add a result to array [$type_id => $type_projects]
            $menu_result[$type->id] = $project_ids;
        }
        $view->with('menu_result', $menu_result);
    }
}