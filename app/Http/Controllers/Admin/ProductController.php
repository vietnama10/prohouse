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

class ProductController extends Controller {

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

    public function getProductList() {
        $products = $this->_product->getAll();
        $types = $this->_type->getAll();
        $attributes = $this->_attribute::where('is_active', '=', 1)->get();
        return view('admin.pages.product', compact('products', 'types', 'attributes'));
    }

    public function getProjectsOfType(Request $req) {
        $result = '<option value="" selected>Choose...</option>';
        if (isset($req->type)) {
            $typeprojects = $this->_typeproject::where('type_id', '=', $req->type)->get();
            foreach ($typeprojects as $typeproject) {
                $result .= '<option value="' . $typeproject->project_id . '">' . $this->_project->getProjectById($typeproject->project_id)->name . '</option>';
            }
            return $result;
        } else {
            return $result;
        }
    }

    public function postCreateProduct(Request $request) {
        $rules = [
            //
            'type_id' => 'required|exists:types,id',
            'project_id' => 'required|exists:projects,id',
            'sku' => 'required|unique:products,sku',
            'name' => 'required',
            'url_key' => 'required|unique:products,url_key',
            'price' => 'required',
            'unit' => 'required',
            'images' => 'required',
            'short_description' => 'required|max:150',
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
            try{
                $this->_product->type_id = (int)$request->type_id;
                $this->_product->project_id = (int)$request->project_id;
                $this->_product->sku = $request->sku;
                $this->_product->name = $request->name;
                $this->_product->url_key = $request->url_key;
                $this->_product->price = (float)$request->price;
                $this->_product->unit = $request->unit;
                $this->_product->short_description = $request->short_description;
                $this->_product->description = $request->description;
                $this->_product->size = (int)$request->size;
                $this->_product->level = (int)$request->level;
                $this->_product->bedroom = (int)$request->bedroom;
                $this->_product->bathroom = (int)$request->bathroom;
                $this->_product->status = ($request->status=='on') ? 1 : 0;
                $this->_product->direction = $request->direction;
                $this->_product->location = $request->location;
                $this->_product->address = $request->address;
                $this->_product->save();
                //ID of product have just inserted.
                $insertId = $this->_product->id;
                //save product images
                foreach($request->file('images') as $key => $value) {
                    $this->_productimage = new ProductImage;
                    $imageName = $value->getClientOriginalName().time().'.'.$value->getClientOriginalExtension();
                    $this->_productimage->product_id = $insertId;
                    $this->_productimage->image = $imageName;
                    $this->_productimage->is_thumnail = 0;
                    if($key == 0){
                        $this->_productimage->is_thumnail = 1;
                    }
                    $this->_productimage->save();
                    $value->move(public_path('images/products'), $imageName);
                }
                //save product attributes
                $attributes = $this->_attribute::where('is_active', '=', 1)->get();
                foreach($attributes as $attr){
                    $this->_attributevalue = new AttributeValue;
                    $this->_attributevalue->product_id = $insertId;
                    $this->_attributevalue->attribute_id = $attr->id;
                    $this->_attributevalue->value = $request->all()[$attr->attribute_tag];
                    $this->_attributevalue->save();
                }
            }catch (\Exception $e) {
                return response()->json(['errors'=>[$e->getMessage()], 'status' => 0]);
            }
            return response()->json(['success' => 'Product has been created.', 'status' => 1]);
        } else {
            return response()->json(['errors' => $validator->errors(), 'status' => 0]);
        }
    }

}
