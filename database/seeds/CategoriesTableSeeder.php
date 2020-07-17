<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $faker;

    public function run()
    {
        $categories = [
            'Electronic' => [
                'Television' => ['LED', '4k', 'QLED', 'OLED', 'SmartTV'],
                'Speaker' => ['Computer speaker', 'Bluetooth speaker', 'Player'],
                'Air conditioner' => ['LG', 'Mitsubishi', 'Daikin', 'Sharp', 'Inverter'],
                'Refrigerator' => ['DAEWON', 'LG', 'Inverter'],
                'Mobile & Tablet' => ['Iphone', 'Samsung', 'Huawei', 'Xiaomi', 'Oppo'],
                'PC & Laptop' => ['Asus', 'MSI', 'DELL', 'HP', 'Macbook', 'Acer'],
                'Camera' => ['Canon', 'Fujiflim', 'Security Camera']
            ],
            'Fashion' => [
                'Male' => ['T-shirt', 'Oversize t-shit', 'Jacket', 'Jean'],
                'Female' => ['Dress', 'Baggy', 'Cardigan'],
                'Bag & accessories' => ['Backpack', 'Hat', 'Necklace'],
                'Shoes' => ['Sneaker', 'Sandal'],
            ],
            'Vehicle' => [
                'Bicycle',
                'Bike',
            ],
        ];

        $this->faker = Faker\Factory::create();
        $this->subCategory($categories);
    }

    /**
     * Create category
     * @param hash
     * @param parent_id
     * @return null;
     */
    public function subCategory($categories,  $parent_id = null){
        foreach ($categories as $key => $value){
            if(is_array($value)){
                $temp = $parent_id;
                $parent_id = Category::create([
                    'name' => $key,
                    'description' => $this->faker->text,
                    'parent_id' => $parent_id,
                ])->id;
                $this->subCategory($value, $parent_id);
                $parent_id = $temp;
            }
            else{
                Category::create([
                    'name' => $value,
                    'description' => $this->faker->text,
                    'parent_id' => $parent_id,
                ]);
            }
        }
        return;
    }

}
