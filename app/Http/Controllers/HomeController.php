<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Type;

class HomeController extends Controller
{
    //
    protected $_product;
    protected $_type;
    public function __construct(Product $product, Type $type){
        $this->_product = $product;
        $this->_type = $type;
    }
    public function index(){
        $products = $this->_product::paginate(4);
        $products_by_type = array();
        foreach($this->_type::all() as $type){
            $products_by_type[] = ['type_name' => $type->name, 'type_url' => $type->url_key, 'products' => $this->_product->getProductsByType($type->id)];
        }
        return view('customer.pages.home', compact('products', 'products_by_type'));
    }
}
