@extends ('customer.master.master')
@section('title', 'Product Title')

@section('Main')
<!-- main page -->
<div class="home-main-wrapper">
    <div id="home-main" class="container">
        {{$product_url_key}}
    </div>
</div>
<!--/main page -->
@endsection