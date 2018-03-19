<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Type;
use App\TypeProject;
use App\Project;

class ProductController extends Controller
{
    //
    protected $_product;
    protected $_type;
    protected $_typeproject;
    protected $_project;
    public function __construct(Product $product, Type $type, TypeProject $type_project, Project $project) {
        $this->_product = $product;
        $this->_type = $type;
        $this->_typeproject = $type_project;
        $this->_project = $project;
    }
    public function getProductList(){
        $products = $this->_product::all();
        $types = $this->_type::all();
        return view('admin.pages.product.list', compact('products', 'types'));
    }
    
    public function getProjectsOfType(Request $req){
        $result = '<option value="" selected>Choose...</option>';
        if(isset($req->type)){
            $typeprojects = $this->_typeproject::where('type_id', '=', $req->type)->get();
            foreach($typeprojects as $typeproject){
                $result.= '<option value="'.$typeproject->project_id.'">'.$this->_project::find($typeproject->project_id)->name.'</option>';
            }
            return $result;
        }else{
            return $result;
        }
    }
    
    public function postCreateProduct(){
        
    }
}
