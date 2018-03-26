<!-- Modal Create Product -->
<div class="modal fade" id="productCreateModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create Product</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" id="success_message" style="display: none">
                    <ul>
                    </ul>
                </div>
                <div class="alert alert-danger" id="error_message" style="display: none">
                    <ul>
                    </ul>
                </div>
                <div id="form_overlay">
                    <div id="text_overlay">Loading...</div>
                </div>
                <form id="demo-form2" class="form_CreateProduct" method="POST" action="{{URL::to('/')}}/admin_1a1u/product/new" data-parsley-validate enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Product Fields
                                    </h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li>
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <div id="field_group1" class="form-horizontal form-label-left">
                                         {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Type
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <select class="form-control required" name="type_id" id="type">
                                                    <option value="">Choose...</option>
                                                    @foreach($types as $type)
                                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Project
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <select class="form-control required" name="project_id" id="project">
                                                    <option value="">Choose...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SKU
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" id="sku" required="required" name="sku" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Name
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Url key
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input id="url_key" class="form-control col-md-7 col-xs-12"  required="required" type="text" name="url_key">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Price
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-5 col-sm-5 col-xs-7">
                                                <input id="price" name="price" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number">
                                            </div>
                                            <div class="control-label col-md-1 col-sm-1 col-xs-1">
                                                <label>Per</label>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-4">
                                                <input id="unit" name="unit" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Images
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input id="images" name="images[]" accept="image/*" type="file" multiple class="date-picker form-control col-md-7 col-xs-12" required="required">
                                                <div class="gallery images-preview"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Short Description
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <textarea id="short_description" name="short_description" class="date-picker form-control col-md-7 col-xs-12" required="required" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Description
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <textarea id="description" name="description" class="date-picker form-control col-md-7 col-xs-12" required="required" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Size
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input id="size" name="size" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Level
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input id="level" name="level" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Bedroom
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input id="bedroom" name="bedroom" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Bathroom 
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input id="bathroom" name="bathroom" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <div class="">
                                                    <span>Not Available</span>
                                                    <label>
                                                        <input type="checkbox" class="js-switch" checked name="status" id="status" />
                                                    </label>
                                                    <span>Available</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Direction 
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input id="direction" name="direction" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Location 
                                                <span class="required"><small>(map url)</small>*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input id="location" name="location" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Address
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <textarea id="address" name="address" class="date-picker form-control col-md-7 col-xs-12" required="required" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Product Attributes
                                    </h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li>
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <div id="field_group2" class="form-horizontal form-label-left">
                                        @foreach($attributes as $attr)
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">{{$attr->name}}
                                                @if($attr->required)
                                                <span class="required">*</span>
                                                @endif
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                @if($attr->input_type == "text")
                                                <input type="{{$attr->input_type}}" id="{{$attr->attribute_tag}}" name="{{$attr->attribute_tag}}" required="{{$attr->required?'required':''}}" class="form-control col-md-7 col-xs-12">
                                                @elseif($attr->input_type == "select")
                                                <select class="form-control {{$attr->required?'required':''}}" name="{{$attr->attribute_tag}}" id="{{$attr->attribute_tag}}">
                                                    <option value="">Choose...</option>
                                                    @foreach(unserialize($attr->default_value) as $value)
                                                    <option value="{{$value}}">{{$value}}</option>
                                                    @endforeach
                                                </select>
                                                @elseif($attr->input_type == "multiselect")
                                                <select class="form-control {{$attr->required?'required':''}}" multiple="multiple" name="{{$attr->attribute_tag}}" id="{{$attr->attribute_tag}}">
                                                    @foreach(unserialize($attr->default_value) as $value)
                                                    <option value="{{$value}}">{{$value}}</option>
                                                    @endforeach
                                                </select>
                                                @endif
                                                
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-4">
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary" id="btn_resetForm" type="reset">Reset</button>
                                <button id="btn-addProduct" type="submit" class="btn btn-success">Add</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>