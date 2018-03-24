<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use App\Product;

class ProductController extends Controller
{
    //
    protected $_product;
    protected $_url;


    public function __construct(Product $product, UrlGenerator $url) {
        $this->_product = $product;
        $this->_url = $url;
    }
    
    public function getProduct($product_url_key){
        $product = $this->_product::where('url_key', '=', $product_url_key)->first();
        if(isset($product)){
            $title = $product->name;
            $baseUrl = $this->_url->to('/');
            $breadcrumb = "";
            $breadcrumb .= '<nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="'.$baseUrl.'">Home</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">'.$product->name.'</li>
                                </ol>
                            </nav>';
            return view('customer.pages.product', compact('product', 'breadcrumb', 'title'));
        }else{
            return view('errors.404');
        }
        
    }
}
