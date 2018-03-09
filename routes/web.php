<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('customer.pages.home');
});

/*
|*  Tuk Tuk Food
|*	Admin Dashboard
|*/

// LogIn / LogOut Admin
Route::get('admin_1a1u/login','Admin\AdminController@getAdminLogin');
Route::post('admin_1a1u/checklogin','Admin\AdminController@checkAdminLogin');
Route::get('admin_1a1u/logout','Admin\AdminController@LogOut');

// Admin Route
Route::group(['prefix'=>'admin_1a1u', 'middleware'=>'adminlogin'],function(){
    Route::get('/', function(){
        return view('admin.pages.home');
    });
    // Group Route for Type
    Route::group(['prefix'=>'type'],function(){
        
    });
});
