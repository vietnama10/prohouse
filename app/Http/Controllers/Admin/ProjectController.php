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

class ProjectController extends Controller {

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

    public function getProjectList() {
        $projects = $this->_project->getAll();
        $types = $this->_type->getAll()->where('is_active', '=', 1);
        return view('admin.pages.project', compact('projects', 'types'));
    }

    public function postCreateProject(Request $request) {
        $rules = [
            //
            'name' => 'required',
            'description' => 'required|max:255',
            'url_key' => 'required|unique:projects,url_key'
        ];
        $messages = [
            'exits' => "The :attribute doesn't exist.",
            'unique' => "The :attribute already exist."
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->passes()) {
            try {
                $this->_project->name = $request->name;
                $this->_project->url_key = $request->url_key;
                $this->_project->description = $request->description;
                $this->_project->save();
                //ID of project have just inserted.
                $insertId = $this->_project->id;
                foreach($request->type_ids as $type_id){
                    $this->_typeproject = new TypeProject;
                    $this->_typeproject->project_id = $insertId;
                    $this->_typeproject->type_id = $type_id;
                    $this->_typeproject->save();
                }
            } catch (\Exception $e) {
                return response()->json(['errors' => [$e->getMessage()], 'status' => 0]);
            }return response()->json(['success' => 'Project has been created.', 'status' => 1]);
        } else {
            return response()->json(['errors' => $validator->errors(), 'status' => 0]);
        }
    }

}
