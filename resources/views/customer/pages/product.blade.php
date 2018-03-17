@extends ('customer.master.master')
@section('title', $title)
@section('css')
<!--[if lt IE 9]>
    <script src="./public/vendors/desoslider/js/vendor/html5shiv/html5shiv.min.js"></script>
<![endif]-->

<link rel="stylesheet" href="./public/vendors/desoslider/css/vendor/magic/magic.min.css">
<link rel="stylesheet" href="./public/vendors/desoslider/css/vendor/animate/animate.min.css">

<link rel="stylesheet" href="./public/vendors/desoslider/css/jquery.desoslide.css">
@endsection
@section('Main')
<!-- main page -->
<div class="home-main-wrapper">
    <div id="home-main" class="container">
        {!!$breadcrumb!!}
        <div class="row">
            <!-- Gallery -->
            <div class="col-sm-7">
                <div class="row">
                    <div id="slideshow" class="col-sm-12"></div>
                </div>

                <div class="row">
                    <article class="col-sm-12">
                        <ul id="slideshow_thumbs" class="desoslide-thumbs-horizontal list-inline text-center">

                            @foreach($product->images as $img)
                            <li>
                                <a href="./public/images/products/{{$img->image}}">
                                    <img src="./public/images/products/{{$img->image}}" class="img-responsive"
                                         alt="{{$img->image}}" data-desoslide-caption-title="{{$img->image}}">
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </article>
                </div>
            </div>
            <div class="col-sm-5">
                <h4 class="product-name">{{$product->name}}</h4>
                <div class="row">
                    <p class="col-sm-6 sku"><strong>sku: </strong><span>#{{$product->sku}}</span></p>
                    <p class="col-sm-6 status"><strong>Status: </strong><span>{{ ($product->status)?'#Available':'#Not Available' }}</span></p>
                </div>
                <hr/>
                <p class=" price"><strong>Price: </strong><span>{{$product->price}}</span></p>
                <div class="basic-info">
                    <ul class="row">
                        <li class="col-sm-6"><strong>Size: </strong><span>{{$product->size}} sqm</span></li>
                        <li class="col-sm-6"><strong>Type: </strong><span>{{$product->type->name}}</span></li>
                        <li class="col-sm-6"><strong>Bedroom: </strong><span>{{$product->bedroom}}</span></li>
                        <li class="col-sm-6"><strong>Bathroom: </strong><span>{{$product->bathroom}}</span></li>
                        <li class="col-sm-6"><strong>Level: </strong><span>{{$product->level}}</span></li>
                        <li class="col-sm-6"><strong>Direction: </strong><span>{{$product->direction}}</span></li>
                    </ul>
                </div>
                <hr/>
                <p><strong>Address: </strong><span>{{$product->address}}</span></p>
                <ul class="social">
                    <li>
                        
                        <div class="fb-share-button" data-href="{{Request::fullUrl()}}" data-layout="button" data-size="large" data-mobile-iframe="true">
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
                                Share
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <hr/>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">DESCRIPTION</a></li>
            <li><a data-toggle="tab" href="#menu1">MORE INFO</a></li>
            <li><a data-toggle="tab" href="#menu2">MAP</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active show">
                <h3>Description</h3>
                <p>{!!$product->description!!}</p>
            </div>
            <div id="menu1" class="tab-pane fade">
                <h3>More Infomation</h3>
                <div class="row">
                    <ul class="list-amenities-and-features"><li><i class="fa fa-check"></i>Children playground</li><li><i class="fa fa-check"></i>Club house</li><li><i class="fa fa-check"></i>Garden</li><li><i class="fa fa-check"></i>Swimming pool</li><li><i class="fa fa-check"></i>Gym</li><li><i class="fa fa-check"></i>Elevator</li><li><i class="fa fa-check"></i>BBQ</li><li><i class="fa fa-check"></i>Car parking</li></ul>
                </div>
            </div>
            <div id="menu2" class="tab-pane fade">
                <h3>Map</h3>
                <div class="map" style="text-align: center;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.221402315802!2d107.57113801226163!3d16.46430314864966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a6cb3e43d477%3A0xf731945c99feba1f!2zS2VtIFTGsMahaSBBbmggxJDDoG8!5e0!3m2!1svi!2s!4v1521258315368" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/main page -->
@endsection

@section('javascript')
<script src="./public/vendors/desoslider/js/vendor/jquery/jquery.js"></script>
<script src="./public/vendors/desoslider/js/vendor/bootstrap/bootstrap.min.js"></script>
<script src="./public/vendors/desoslider/js/vendor/highlight/highlight.pack.js"></script>

<script src="./public/vendors/desoslider/js/jquery.desoslide.min.js"></script>
<script type="text/javascript">
    $('#slideshow').desoSlide({
        thumbs: $('#slideshow_thumbs li > a'),
        overlay: 'hover',
        controls: {
            show: false,
            keys: true
        },
        first: 1,
        effect: 'none'
    });
</script>

<!--Facebook-->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=1925279281046988&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
@endsection
