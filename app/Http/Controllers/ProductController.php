<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    protected $_product;
    
    public function __construct(Product $product) {
        $this->_product = $product;
    }
    
    public function getProduct($product_url_key){
        return view('customer.pages.product', compact('product_url_key'));
    }
}
