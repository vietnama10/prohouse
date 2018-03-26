<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Type;
use App\TypeProject;
use App\Project;
use App\Attribute;
use App\ProductImage;
use App\AttributeValue;
use Validator;

class TypeController extends Controller {

    //
    protected $_product;
    protected $_type;
    protected $_typeproject;
    protected $_project;
    protected $_attribute;
    protected $_productimage;
    protected $_attributevalue;

    public function __construct(
    Product $product, Type $type, TypeProject $type_project, Project $project, Attribute $attribute, ProductImage $productimage, AttributeValue $attributevalue
    ) {
        $this->_attribute = $attribute;
        $this->_product = $product;
        $this->_type = $type;
        $this->_typeproject = $type_project;
        $this->_project = $project;
        $this->_productimage = $productimage;
        $this->_attributevalue = $attributevalue;
    }

    public function getTypeList() {
        $types = $this->_type->getAll();
        return view('admin.pages.type', compact('types'));
    }

    public function postCreateType(Request $request) {
        $rules = [
            //
            'name' => 'required',
            'url_key' => 'required|unique:types,url_key'
        ];
        $messages = [
            'exits' => "The :attribute doesn't exist.",
            'unique' => "The :attribute already exist."
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->passes()) {
            try {
                $this->_type->name = $request->name;
                $this->_type->url_key = $request->url_key;
                $this->_type->sort_order = (int)$request->sort_order;
                $this->_type->is_active = ($request->is_active=='on') ? 1 : 0;
                $this->_type->save();
            } catch (\Exception $e) {
                return response()->json(['errors' => [$e->getMessage()], 'status' => 0]);
            }return response()->json(['success' => 'Type has been created.', 'status' => 1]);
        } else {
            return response()->json(['errors' => $validator->errors(), 'status' => 0]);
        }
    }

}
