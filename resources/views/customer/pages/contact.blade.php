<?php
use App\Helpers\LayoutHelper;

$helper = new LayoutHelper();
?>
@extends ('customer.master.master')
@section('title', 'Apartment, Villa, Office for rent in Ho Chi Minh')

@section('Main')
<!-- main page -->
<div class="home-main-wrapper" id="contactPage">
    <div id="home-main" class="container">
        {!!$breadcrumb!!}
        <div class="row">
            <div id="canvasMap">
                <iframe src="{{$helper->config_value_by_tag('cf_location')}}" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-5 col-sm-12">
                <h2>Sweet House</h2>
                @include('customer.pages.blocks.contact_info')
            </div>
            <div class="col-md-7 col-sm-12">
                <h2>Send us your message</h2>
                @include('customer.pages.blocks.contact_form')
            </div>
        </div>
    </div>
</div>
<hr/>
<!--/main page -->
@endsection