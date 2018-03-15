<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use App\Project;
use App\Product;
use Illuminate\Routing\UrlGenerator;

class CategoryController extends Controller
{
    //
    protected $_type;
    protected $_project;
    protected $_product;
    protected  $_url;

    public function __construct(Type $type, Project $project, Product $product, UrlGenerator $url) {
        $this->_type = $type;
        $this->_project = $project;
        $this->_product = $product;
        $this->_url = $url;
    }
    
    public function getByType($type_url_key){
        $type = $this->_type::where('url_key', '=', $type_url_key)->first();
        if(isset($type)){
            $products = $this->_product::where('type_id', '=', $type->id)->paginate(10);
            $baseUrl = $this->_url->to('/');
            $title = $type->name;
            $breadcrumb = "";
            $breadcrumb .= '<nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="'.$baseUrl.'">Home</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">'.$type->name.'</li>
                                </ol>
                            </nav>';
            return view('customer.pages.category', compact('products', 'breadcrumb', 'title'));
        }else{
            return view('customer.pages.404');
        }
    }
    
    public function getByTypeAndProject($type_url_key, $project_url_key){
        $type = $this->_type::where('url_key', '=', $type_url_key)->first();
        $project = $this->_project::where('url_key', '=', $project_url_key)->first();
        if(isset($type) && isset($project)){
            $products = $this->_product::where('type_id', '=', $type->id)->where('project_id', '=', $project->id)->paginate(10);
            $baseUrl = $this->_url->to('/');
            $title = $project->name;
            $breadcrumb = "";
            $breadcrumb .= '<nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="'.$baseUrl.'">Home</a></li>
                                    <li class="breadcrumb-item"><a href="'.$baseUrl.'/category/'.$type->url_key.'">'.$type->name.'</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">'.$project->name.'</li>
                                </ol>
                            </nav>';
            return view('customer.pages.category', compact('products', 'breadcrumb', 'title'));
        }else{
            return view('customer.pages.404');
        }
    }
}
