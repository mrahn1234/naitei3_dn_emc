<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$GLOBALS['faker'] = \Faker\Factory::create();
$GLOBALS['faker']->addProvider(new \Bezhanov\Faker\Provider\Commerce($GLOBALS['faker']));

$factory->define(Product::class, function () {
    return [
        'name' => $GLOBALS['faker']->productName,
        'description' => $GLOBALS['faker']->text,
        'price' => rand(1000,100000)/10,
        'image' => 'default.png',
        'bought' => rand(1,100),
        'quantity' => 100,
        'trend_count' => rand(1,100),
    ];
});
