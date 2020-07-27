<?php

namespace App\Helpers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Config;

class Helper
{

    public static function main_categories(){
        $main_categories = Category::whereNull('parent_id')->get();
        return $main_categories;
    }

    public function randomCategory(){
        $random_cate = $this->main_categories()[rand(0, 2)];
        return $random_cate;
    }

    public static function best_seller(){
        $best_seller = Product::orderBy('bought', 'desc')->offset(Config::get('app._OFFSET'))->limit(Config::get('app._LIMIT'))->get();
        return $best_seller;
    }

}
