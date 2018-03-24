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

//Frontend Route
Route::get('/', 'HomeController@index');
Route::group(['prefix'=>'category'],function(){
    Route::get('{type_url_key}', 'CategoryController@getByType');
    Route::get('{type_url_key}/{project_url_key}', 'CategoryController@getByTypeAndProject');
});
Route::get('product/{product_url_key}', 'ProductController@getProduct');
Route::get('search', 'SearchController@getSearchResult');
Route::get('contact-us', 'PageController@contact');
Route::get('about-us', 'PageController@aboutus');
Route::get('advance-search', 'PageController@advanceSearch');

/*
|* Pro House
|*	Admin Dashboard
|*/

// LogIn / LogOut Admin
Route::get('admin_1a1u/login','Admin\AdminController@getAdminLogin');
Route::post('admin_1a1u/checklogin','Admin\AdminController@checkAdminLogin');
Route::get('admin_1a1u/logout','Admin\AdminController@LogOut');

// Backend Route
Route::group(['prefix'=>'admin_1a1u', 'middleware'=>'adminlogin'],function(){
    Route::get('/', function(){
        return view('admin.pages.home');
    });
    // Group Route for Type
    Route::group(['prefix'=>'type'],function(){
        
    });
    // Group Route for Project
    Route::group(['prefix'=>'project'],function(){
        
    });
    // Group Route for Product
    Route::group(['prefix'=>'product'],function(){
        Route::get('/', 'Admin\ProductController@getProductList');
        Route::get('getProjectsOfType', 'Admin\ProductController@getProjectsOfType');
        Route::post('new', 'Admin\ProductController@postCreateProduct');
    });
});
