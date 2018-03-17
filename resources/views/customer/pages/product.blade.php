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
<div id="product-page" class="home-main-wrapper">
    <div id="home-main" class="container">
        {!!$breadcrumb!!}
        <div class="row">
            <!-- Gallery -->
            <div class="col-sm-7 left-column">
                <div class="row">
                    <div id="slideshow" class="col-sm-12"></div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
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
                    </div>
                </div>
            </div>
            <div class="col-sm-5 right-column">
                <h4 class="product-name">{{$product->name}}</h4>
                <p class="sku"><strong>Sku: </strong><span>#{{$product->sku}}</span></p>
                <hr/>
                <h4 class=" price"><strong>Price: </strong><span>{{App\Helpers\LayoutHelper::product_price($product->price)}} / {{$product->unit}}</span></h4>
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
                <p class="status"><strong>Status: </strong><span>{{ ($product->status)?'#Available':'#Not Available' }}</span></p>
                <p class="address"><strong>Address: </strong><span>{{$product->address}}</span></p>
                <hr/>
                <ul class="social">
                    <li>
                        <div id="shareBtn" class="share-button"><i class="fab fa-facebook"></i></div>
                    </li>
                    <li>
                        <a class="share-button" href="https://plus.google.com/share?url={{Request::fullUrl()}}" 
                           onclick="javascript:window.open(this.href, '',
                                            'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                                    return false;">
                            <i class="fab fa-google-plus-square"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <hr/>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu1">More Infomation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu2">Map</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>
                <h3>Description</h3>
                <p>{!!$product->description!!}</p>
            </div>
            <div id="menu1" class="container tab-pane fade"><br>
                <h3>More Infomation</h3>
                <div class="row">
                    <ul class="list-amenities-and-features"><li><i class="fa fa-check"></i>Children playground</li><li><i class="fa fa-check"></i>Club house</li><li><i class="fa fa-check"></i>Garden</li><li><i class="fa fa-check"></i>Swimming pool</li><li><i class="fa fa-check"></i>Gym</li><li><i class="fa fa-check"></i>Elevator</li><li><i class="fa fa-check"></i>BBQ</li><li><i class="fa fa-check"></i>Car parking</li></ul>
                </div>
            </div>
            <div id="menu2" class="container tab-pane fade"><br>
                <h3>Map</h3>
                <div class="map" style="text-align: center;">
                    <iframe src="{{$product->location}}" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <hr/>
    </div>
</div>
<!--/main page -->
@endsection

@section('javascript')
<script src="./public/vendors/desoslider/js/vendor/jquery/jquery.js"></script>
<script src="./public/vendors/desoslider/js/vendor/bootstrap/bootstrap.min.js"></script>
<script src="./public/vendors/desoslider/js/vendor/highlight/highlight.pack.js"></script>
<script src="./public/vendors/desoslider/js/jquery.desoslide.min.js"></script>

<!--http://sylouuu.github.io/desoslide/-->
<script type="text/javascript">
                                $('#slideshow').desoSlide({
                                    thumbs: $('#slideshow_thumbs li > a'),
                                    overlay: 'hover',
                                    controls: {
                                        show: true,
                                        keys: true
                                    },
                                    auto: {
                                        start: true
                                    },
                                    first: 1,
                                    interval: 6000,
                                    effect: 'none'
                                });
</script>

<!--Facebook Share-->
<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '1600793089986934',
            xfbml: true,
            version: 'v2.5'
        });
    };
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=1925279281046988&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script>
    document.getElementById('shareBtn').onclick = function () {
        FB.ui({
            method: 'share',
            display: 'popup',
            href: '{{ Request::fullUrl() }}',
        }, function (response) {});
    }
</script>
@endsection
