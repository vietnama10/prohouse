<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;

class PageController extends Controller {

    //
    protected  $_url;

    public function __construct(UrlGenerator $url) {
        $this->_url = $url;
    }
    
    public function contact() {
        $baseUrl = $this->_url->to('/');
        $breadcrumb = "";
        $breadcrumb .= '<nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="' . $baseUrl . '">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ol>
                            </nav>';
        return view('customer.pages.contact', compact('breadcrumb'));
    }

    public function aboutus() {
        $baseUrl = $this->_url->to('/');
        $breadcrumb = "";
        $breadcrumb .= '<nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="' . $baseUrl . '">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                </ol>
                            </nav>';
        return view('customer.pages.aboutus', compact('breadcrumb'));
    }
    
     public function advanceSearch() {
        $baseUrl = $this->_url->to('/');
        $breadcrumb = "";
        $breadcrumb .= '<nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="' . $baseUrl . '">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Advance Search</li>
                                </ol>
                            </nav>';
        return view('customer.pages.advancesearch', compact('breadcrumb'));
    }
}
