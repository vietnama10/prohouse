<!-- Modal Create Product -->
<div class="modal fade" id="projectCreateModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create Type</h4>
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
                <form id="demo-form2" class="form_CreateProject" method="POST" action="{{URL::to('/')}}/admin_1a1u/project/new" data-parsley-validate enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Type Fields
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
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url_key">Url Key
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" id="url_key" name="url_key" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="short_order">Description
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <textarea id="description" value="" name="description" required="required" class="form-control col-md-7 col-xs-12" rows="5"></textarea>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Belong to Types
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <select class="form-control required" multiple="multiple" name="type_ids[]" id="type_ids">
                                                    @foreach($types as $type)
                                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
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