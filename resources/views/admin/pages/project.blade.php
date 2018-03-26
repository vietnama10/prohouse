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
<div class="right_col" role="main">
    <div class="row">
        <?php //var_dump($projects);?>
    </div>
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Types</h3>
            </div>
            <div class="title_right">
                <div class="pull-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#projectCreateModal">Add Project</button>
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
                                    <th>Description</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach($projects as $project)
                                    <tr id="project_{{$project->id}}">
                                        <td>{{$project->id}}</td>
                                        <td>{{$project->name}}</td>
                                        <td>{{$project->url_key}}</td>
                                        <td>{{$project->description}}</td>
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
@include('admin.pages.blocks.project_create')
@endsection

@section('javascript')
<script src="public/js/admin/custom-form.js"></script>
@endsection