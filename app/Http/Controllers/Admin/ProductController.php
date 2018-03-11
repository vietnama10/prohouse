<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    //
    public function getProductList(){
        $products = Product::all();
        return view('admin.pages.product.list', compact('products'));
    }
}
