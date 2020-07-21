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

        foreach ($products as $product){
            $product->categories()->attach(
                $categories->random(rand(1,3))->pluck('id')->toArray()
            );
        }
    }
}
