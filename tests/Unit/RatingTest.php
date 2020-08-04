<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\User;
use Tests\TestCase;

class RatingTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    protected $user, $rating, $product;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = factory(User::class)->create();
        $this->product = factory(Product::class)->create();
        $this->rating = $this->user->ratings()->create([
            'product_id' => $this->product->id,
            'rating_star' => rand(1,5),
        ]);
    }

    public function test_it_belongsTo_user_and_product(){
        $this->assertInstanceOf(User::class, $this->rating->user);
        $this->assertInstanceOf(Product::class, $this->rating->product);
    }
}
