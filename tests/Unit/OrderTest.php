<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Tests\TestCase;

class OrderTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    protected $user, $order, $product;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = factory(User::class)->create();
        $this->product = factory(Product::class)->create();
        $this->order = $this->user->orders()->create();
    }

    public function test_it_has_many_item_and_belongsTo_user()
    {
        $this->assertInstanceOf(User::class, $this->order->user);
        $this->assertInstanceOf(HasMany::class, $this->order->orderItems());
    }
}
