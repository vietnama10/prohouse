<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use App\Product;

class SearchController extends Controller {

    //
    protected $_product;
    protected $_url;

    public function __construct(Product $product, UrlGenerator $url) {
        $this->_product = $product;
        $this->_url = $url;
    }

    public function getSearchResult(Request $req) {
        $products = $this->_product::where('name', 'like', '%'.$req->name.'%')->paginate(4);
        $baseUrl = $this->_url->to('/');
        $title = 'Search Result';
        $breadcrumb = "";
        $breadcrumb .= '<nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="' . $baseUrl . '">Home</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">' . 'Search result' . '</li>
                                </ol>
                            </nav>';
        return view('customer.pages.searchresult', compact('products', 'breadcrumb', 'title'));
    }

}
