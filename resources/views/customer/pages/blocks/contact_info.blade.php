<?php
use App\Helpers\LayoutHelper;

$helper = new LayoutHelper();
?>
<div class="contact-info">
    <p><i class="fas fa-phone"> </i><span>Phone: {{$helper->config_value_by_tag('cf_phonenumber')}}</span></p>
    <p><i class="fas fa-mobile-alt"> </i><span>Mobile: {{$helper->config_value_by_tag('cf_mobilenumber')}}</span></p>
    <p><i class="fas fa-envelope-square"> </i><span>Email: {{$helper->config_value_by_tag('cf_email')}}</span></p>
    <p><i class="fab fa-facebook"> </i><span>Facebook: <a href='{{$helper->config_value_by_tag('cf_facebook')}}' title="SweetHouse">Sweet House</span></a></p>
    <p><i class="fas fa-map-marker"> </i><span>Address: {{$helper->config_value_by_tag('cf_address')}}</span></p>
    
</div>