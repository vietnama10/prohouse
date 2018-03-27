<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Helpers;
use App\Config;

class LayoutHelper{
    
    protected $_config;
    
    public function __construct() {
        $this->_config = new Config;
    }
    
    public static function product_price($price) {
        $symbol = '$';
        $symbol_thousand = ',';
        $decimal_place = 0;
        $price = number_format($price, $decimal_place, '', $symbol_thousand);
        return $symbol.$price;
    }
    public function config_value_by_tag($config_tag){
        return $this->_config->getConfigValueByTag($config_tag);
    }
}
