<?php
use App\Type;

$type = new Type();
?>
@extends ('admin.master.master')
@section('title', 'Dashboard | ProHouse')
@section('sidebar')
@endsection
@section('Main')
<style>
    .right_col{min-height: auto !important;}
</style>
<div class="right_col" role="main">
    <div class="row">
        <?php //var_dump($types);?>
    </div>
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Types</h3>
            </div>
            <div class="title_right">
                <div class="pull-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#typeCreateModal">Add Type</button>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><small>Types</small></h2>
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
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>URL</th>
                                    <th>Sort order</th>
                                    <th>Active</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach($types as $type)
                                    <tr id="type_{{$type->id}}">
                                        <td>{{$type->id}}</td>
                                        <td>{{$type->name}}</td>
                                        <td>{{$type->url_key}}</td>
                                        <td>{{$type->sort_order}}</td>
                                        <td>
                                            @if($type->is_active == 1)
                                                {{'True'}}
                                            @else
                                                {{'False'}}
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.pages.blocks.type_create')
@endsection

@section('javascript')
<script src="public/js/admin/custom-form.js"></script>
@endsection