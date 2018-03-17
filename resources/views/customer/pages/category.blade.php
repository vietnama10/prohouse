@extends ('customer.master.master')
@section('title', $title)
@section('Main')
<!-- main page -->
<div class="home-main-wrapper">
    <div id="home-main" class="container">
        {!!$breadcrumb!!}
        <div id="top-properties" class="row block">
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-6 product-item rounded">
                    <div class="product-box">
                        <h3><a href="product/{{ $product->url_key }}">{{$product->name}}</a></h3>
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
                                <span class="see-more"><a href="product/{{ $product->url_key }}">More details</a></span>
                            </div>
                        </figure>
                        <div class=" row product-properties">
                            <span class="col"><strong>Size: </strong>{{$product->size}} sqm</span>
                            <span class="col"><strong>Bedroom: </strong>{{$product->bedroom}}</span>
                            <span class="col"><strong>Bathroom: </strong>{{$product->bathroom}}</span>
                            <span class="col"><strong>Level: </strong>{{$product->level}}</span>
                            <span class="col"><strong>Interior: </strong>{{ App\AttributeValue::getAttrValByAttrIdAndProId('1', $product->id)['value'] }}</span>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
            {{ $products->links() }}
        </div>
    </div>
</div>
<!--/main page -->
@endsection