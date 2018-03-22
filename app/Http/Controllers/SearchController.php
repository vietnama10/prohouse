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

    public function getSearchResult(Request $request) {

        if (!empty($request->interior)) {
            $this->_product = $this->_product::join('attribute_values', 'attribute_values.product_id', '=', 'products.id')
                    ->join('attributes', 'attribute_values.attribute_id', '=', 'attributes.id')
                    ->where('attribute_tag', '=', 'interior')
                    ->whereRaw('lower(value) like ?', ['%' . strtolower($request->interior) . '%'])
                    ->select('products.*');
        }
        if (!empty($request->type)) {
            $this->_product = $this->_product->where('type_id', '=', $request->type);
        }
        if (!empty($request->location)) {
            $this->_product = $this->_product->whereRaw('lower(location) like ?', ['%' . strtolower($request->location) . '%']);
        }
        if (!empty($request->direction)) {
            $this->_product = $this->_product->whereRaw('lower(direction) like ?', ['%' . strtolower($request->direction) . '%']);
        }
        if (!empty($request->bedroom)) {
            $this->_product = $this->_product->where('bedroom', '=', $request->bedroom);
        }
        if (!empty($request->price_range)) {
            $price_range = explode('-', $request->price_range);
            if ($price_range[1] == 'max') {
                $this->_product = $this->_product->where('price', '>', $price_range[0]);
            } else {
                $this->_product = $this->_product->where('price', '>=', $price_range[0])
                        ->where('price', '<=', $price_range[1]);
            }
        }
        $this->_product = $this->_product->paginate(10);
        $products = $this->_product;
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
