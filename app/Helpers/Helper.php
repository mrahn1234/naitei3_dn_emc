<?php

namespace App\Helpers;

use App\Models\Category;
use App\Models\Product;
use Auth;

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
        $best_seller = Product::orderBy('bought', 'desc')->offset(0)->limit(3)->get();
        return $best_seller;
    }

    public static function my_order(){
        if(Auth::check() && Auth::user()->orders()){
            $order = Auth::user()->orders()->get()->last();
            return $order;
        }
    }

    public static function item_count($items){
        $count = 0;
        foreach($items as $item){
            $count += $item->quantity;
        }
        return $count;
    }

    public static function total($order){
        $total = 0;
        foreach($order->orderItems()->get() as $item){
            $total += $item->product()->get()[0]->price * $item->quantity;
        }
        return $total;
    }

}
