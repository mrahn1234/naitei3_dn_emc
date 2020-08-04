<?php

namespace Tests\Unit;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Tests\TestCase;

class OrderItemTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    protected $user, $order, $orderItem, $product;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = factory(User::class)->create();
        $this->product = factory(Product::class)->create();
        $this->order = $this->user->orders()->create();
        $this->orderItem = $this->order->orderItems()->create();
        $this->orderItem->product_id = $this->product->id;
        $this->orderItem->save();
    }

    public function test_it_belongsTo_order_and_product()
    {
        $this->assertInstanceOf(Order::class, $this->orderItem->order);
        $this->assertInstanceOf(Product::class, $this->orderItem->product);
    }
}
