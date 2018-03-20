<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Type;
use App\TypeProject;
use App\Project;
use App\Attribute;
use Validator;

class ProductController extends Controller {

    //
    protected $_product;
    protected $_type;
    protected $_typeproject;
    protected $_project;
    protected $_attribute;

    public function __construct(Product $product, Type $type, TypeProject $type_project, 
        Project $project, Attribute $attribute) 
    {
        $this->_attribute = $attribute;
        $this->_product = $product;
        $this->_type = $type;
        $this->_typeproject = $type_project;
        $this->_project = $project;
    }

    public function getProductList() {
        $products = $this->_product::all();
        $types = $this->_type::all();
        $attributes = $this->_attribute::where('is_active', '=', 1)->get();
        return view('admin.pages.product.list', compact('products', 'types', 'attributes'));
    }

    public function getProjectsOfType(Request $req) {
        $result = '<option value="" selected>Choose...</option>';
        if (isset($req->type)) {
            $typeprojects = $this->_typeproject::where('type_id', '=', $req->type)->get();
            foreach ($typeprojects as $typeproject) {
                $result .= '<option value="' . $typeproject->project_id . '">' . $this->_project::find($typeproject->project_id)->name . '</option>';
            }
            return $result;
        } else {
            return $result;
        }
    }

    public function postCreateProduct(Request $request) {
        $rules =[
                    //
                    'type_id' => 'required|exists:types,id',
                    'project_id' => 'required|exists:projects,id',
                    'sku' => 'required|unique:products,sku',
                    'name' => 'required',
                    'url_key' => 'required|unique:products,url_key',
                    'price' => 'required',
                    'description' => 'required|max:800',
                    'size' => 'required|numeric',
                    'level' => 'required|numeric',
                    'bedroom' => 'required',
                    'bathroom' => 'required',
                    'direction' => 'required',
                    'location' => 'required',
                    'address' => 'required'
        ];
        $messages = [
            'exits' => "The :attribute doesn't exist.",
            'unique' => "The :attribute already exist."
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->passes()) {
            return response()->json(['success' => 'Product has been created.', 'status' => 1]);
        } else {
            return response()->json(['errors' => $validator->errors(), 'status' => 0]);
        }
    }

}
