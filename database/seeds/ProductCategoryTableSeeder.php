<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = App\Models\Product::all();
        $categories = App\Models\Category::all();

        //chua loai tru main category

        foreach ($products as $product){
            $product->categories()->attach(
                $categories->random(rand(1,4))->pluck('id')->toArray()
            );
        }
    }
}
