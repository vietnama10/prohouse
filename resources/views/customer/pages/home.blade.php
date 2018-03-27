<?php
use App\Helpers\LayoutHelper;

$helper = new LayoutHelper();
?>
@extends ('customer.master.master')
@section('title', $helper->config_value_by_tag('cf_hometitle'))

@section('Main')
<!-- slide -->
<div class="slide-wrapper">
    <div id="home-slide">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./public/images/slides/slide-1.jpeg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./public/images/slides/slide-2.jpeg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./public/images/slides/slide-3.jpeg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!--/slide -->

<!-- search form -->
<div class="search-wrapper">
    <div id="search" class="container">
        @include('customer.pages.blocks.search_form')
    </div>
</div>
<!--/search form -->

<!-- main page -->
<div class="home-main-wrapper">
    <div id="home-main" class="container">
        <!-- blocks show property -->
        <div id="top-properties" class="row block">
            <h2>Top Properties</h2>
            <div class="row">
                @foreach($products as $product)
                @include('customer.pages.blocks.productitem')
                @endforeach
            </div>
            <span class="see-more"><a href="#">See more...</a></span>
        </div>

        <!--block products by type-->
        @foreach($products_by_type as $data)
        @if(count($data['products']) > 0)
        <div id="type-data-{{ $data['type_id'] }}" class="row block">
            <h2>{{ $data['type_name'] }}</h2>
            <div class="row">
                @foreach($data['products'] as $product)
                @include('customer.pages.blocks.productitem')
                @endforeach
            </div>
            <span class="see-more"><a href="{{ $data['type_url'] }}">See more...</a></span>
        </div>
        @endif
        @endforeach


        <!-- features -->
        <div id="features" class="row block">
            <div class="col-sm">
                <a href="about-us" class="feature-icon"><i class="fas fa-users fa-3x"></i></a>
                <h5>about us</h5>
                <p>We have professional and well-qualified teams of realtors, counselors…. During the existence in a market we have been trusted and supported from lots of customers and landlords.</p>
                <a href="about-us" class="btn btn-dark">read more</a>
            </div>
            <div class="col-sm">
                <a href="contact-us" class="feature-icon"><i class="fas fa-map-marker fa-3x"></i></a>
                <h5>contact us</h5>
                <p>
                Thank you so much for comming with Sweet House. If this is an urgent matter please contact us for supporting by
                our connecting info below.
                </p>
                <a href="contact-us" class="btn btn-dark">read more</a>
            </div>
            <div class="col-sm">
                <a href="advance-search" class="feature-icon"><i class="fas fa-search fa-3x"></i></a>
                <h5>advance search</h5>
                <p>Let's use advance search for extra details, which will save your time to find out your dream house, the office or the land.</p>
                <a href="advance-search" class="btn btn-dark">read more</a>
            </div>
        </div>
    </div>
</div>
<!--/main page -->
@endsection