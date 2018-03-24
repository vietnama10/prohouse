@extends ('customer.master.master')
@section('title', 'Apartment, Villa, Office for rent in Ho Chi Minh')

@section('Main')
<!-- main page -->
<div class="home-main-wrapper" id="contactPage">
    <div id="home-main" class="container">
        {!!$breadcrumb!!}
        <div class="row">
            <div id="canvasMap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d501726.46045380377!2d106.41503196962296!3d10.754666397185359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529292e8d3dd1%3A0xf15f5aad773c112b!2zSOG7kyBDaMOtIE1pbmg!5e0!3m2!1svi!2s!4v1521877832035" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
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