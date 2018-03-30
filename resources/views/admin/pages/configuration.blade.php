<?php

use App\Type;

$project = new Type();
?>
@extends ('admin.master.master')
@section('title', 'Dashboard | ProHouse')
@section('sidebar')
@endsection
@section('Main')
<style>
    .right_col{min-height: auto !important;}
</style>
<div class="right_col" role="main" id="configPage">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Configuration</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
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
                    <form id="demo-form2" method="POST" action="{{URL::to('/')}}/admin_1a1u/config/save" data-parsley-validate class="form-horizontal form-label-left form_SaveConfigs">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cf_hometitle">Home title<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="cf_hometitle" name="cf_hometitle" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cf_logo">Logo
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" id="cf_logo" name="cf_logo" accept="image/*" class="form-control col-md-7 col-xs-12">
                                <!--<input type="hidden" id="current_logo" value="" class="form-control col-md-7 col-xs-12">-->
                                <div class="images-preview col-sm-6"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cf_email" class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="cf_email" class="form-control col-md-7 col-xs-12" required="required" type="text" name="cf_email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone number
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="cf_phonenumber" name="cf_phonenumber" class="form-control col-md-7 col-xs-12" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile number <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="cf_mobilenumber" name="cf_mobilenumber" class="form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Address <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="cf_address" name="cf_address" class="form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Location <small> (Map Url) </small><span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="cf_location" name="cf_location" class="form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Facebook <small>(Facebook Url)</small>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="cf_facebook" name="cf_facebook" class="form-control col-md-7 col-xs-12" type="text">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('javascript')
<script src="public/js/admin/custom-form.js"></script>
@endsection