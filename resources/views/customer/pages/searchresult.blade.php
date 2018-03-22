@extends ('customer.master.master')
@section('title', $title)
@section('Main')
<!-- main page -->
<div id="search-result-page" class="home-main-wrapper">
    <div id="home-main" class="container">
        {!!$breadcrumb!!}
        <div id="top-properties" class="row block">
            <div class="row">
                @foreach($products as $product)
                    @include('customer.pages.blocks.productitem')
                @endforeach
            </div>
            <div class="col-sm-12">
                {{$products->links()}}
            </div>
        </div>
    </div>
</div>
<!--/main page -->
@endsection

