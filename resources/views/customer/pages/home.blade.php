@extends ('customer.master.master')
@section('title', 'Apartment, Villa, Office for rent in Ho Chi Minh')

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
        @include('customer.master.search')
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
                <div class="col-lg-6 product-item rounded">
                    <div class="product-box">
                        <h3><a href={{ $product->url_key }}"">{{$product->name}}</a></h3>
                        <figure class="row">
                            <div class="col-sm">
                                <?php
                                $thumnail = "";
                                foreach($product->images as $img){
                                    if($img->is_thumnail == 1){
                                        $thumnail = $img->image;
                                    }
                                }
                                ?>
                                <img src="./public/images/products/{{$thumnail}}" class="img-fluid">
                            </div>
                            <div class="col-sm">
                                <p class="price">Price: ${{ $product->price }}</p>
                                <p class="description">{!! $product->description !!}</p>
                                <span class="see-more"><a href="{{ $product->url_key }}">More details</a></span>
                            </div>
                        </figure>
                        <div class=" row product-properties">
                            <span class="col"><strong>Size: </strong>{{$product->size}} sqm</span>
                            <span class="col"><strong>Bedroom: </strong>{{$product->bedroom}}</span>
                            <span class="col"><strong>Bathroom: </strong>{{$product->bathroom}}</span>
                            <span class="col"><strong>Level: </strong>{{$product->level}}</span>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
            <span class="see-more"><a href="#">See more...</a></span>
        </div>
        
        <!--block products by type-->

            @foreach($products_by_type as $data)
               @if(count($data['products']) > 0)
                    <div id="top-properties" class="row block">
                        <h2>{{ $data['type_name'] }}</h2>
                        <div class="row">
                            @foreach($data['products'] as $product)
                            <div class="col-lg-6 product-item rounded">
                                <div class="product-box-content">
                                    <h3>{{$product->name}}</h3>
                                    <figure class="row">
                                        <div class="col-sm">
                                            <?php
                                            $thumnail = "";
                                            foreach($product->images as $img){
                                                if($img->is_thumnail == 1){
                                                    $thumnail = $img->image;
                                                }
                                            }
                                            ?>
                                            <img src="./public/images/products/{{$thumnail}}" class="img-fluid">
                                        </div>
                                        <div class="col-sm">
                                            <p class="price rounded-right">Price: ${{ $product->price }}</p>
                                            <p class="description">{!! $product->description !!}</p>
                                            <span class="see-more"><a href="{{ $product->url_key }}">More details</a></span>
                                        </div>
                                    </figure>
                                    <div class=" row product-properties">
                                        <span class="col"><strong>Size: </strong>{{$product->size}} sqm</span>
                                        <span class="col"><strong>Bedroom: </strong>{{$product->bedroom}}</span>
                                        <span class="col"><strong>Bathroom: </strong>{{$product->bathroom}}</span>
                                        <span class="col"><strong>Level: </strong>{{$product->level}}</span>
                                    </div>
                                </div>
            
                            </div>
                            @endforeach
                        </div>
                        <span class="see-more"><a href="{{ $data['type_url'] }}">See more...</a></span>
                    </div>
                @endif
            @endforeach
       
        
        <!-- features -->
        <div id="features" class="row block">
            <div class="col-sm">
                <a href="#" class="feature-icon"><i class="fas fa-users fa-3x"></i></a>
                <h5>about us</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut</p>
                <a href="#" class="btn btn-dark">read more</a>
            </div>
            <div class="col-sm">
                <a href="#" class="feature-icon"><i class="fas fa-map-marker fa-3x"></i></a>
                <h5>contact us</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut</p>
                <a href="#" class="btn btn-dark">read more</a>
            </div>
            <div class="col-sm">
                <a href="#" class="feature-icon"><i class="fas fa-search fa-3x"></i></a>
                <h5>recruitment</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut</p>
                <a href="#" class="btn btn-dark">read more</a>
            </div>
        </div>
    </div>
</div>
<!--/main page -->
@endsection