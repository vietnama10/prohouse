<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\ViewComposers\Admin;
use Illuminate\Support\Facades\Auth;

use Illuminate\View\View;

class ProfileComposer
{   
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
       $view->with('login_user', Auth::user());
    }
}