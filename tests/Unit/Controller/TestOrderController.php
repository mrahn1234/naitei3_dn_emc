<?php

namespace Tests\Unit\Controller;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Faker\Factory as Faker;
use Tests\TestCase;

class TestOrderController extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    protected $user, $order, $item, $product;

    protected function setUp(): void
    {
        parent::setUp();
        $this->faker = Faker::create();
        $this->user = factory(User::class)->create();
        $this->order = factory(Order::class)->create([
            'user_id' => $this->user->id,
            'status' => 3,
        ]);
        $this->product = factory(Product::class)->create();
        $this->item = $this->order->orderItems()->create();
        $this->item->product_id = $this->product->id;
        $this->item->save();
    }

    public function test_user_create_order_and_add_item_to_order()
    {
        $this->get(route('order_item'))->assertStatus(405);
        $this->assertTrue($this->user->orders->contains($this->order));
        $this->assertTrue($this->order->orderItems->contains($this->item));
        $this->assertDatabaseHas('orders', [
            'user_id' => $this->user->id,
            'id' => $this->order->id,
        ]);
        $this->assertDatabaseHas('order_items', [
            'order_id' => $this->order->id,
            'product_id' => $this->product->id,
        ]);
    }

    public function test_edit_quantity_item()
    {
        $this->item->quantity = rand(1,100);
        $this->item->save();
        $this->assertDatabaseHas('order_items', [
            'id' => $this->item->id,
            'quantity' => $this->item->quantity,
        ]);
    }

    public function test_edit_phone_and_address_ship(){
        $this->order->ship_address = $this->faker->address;
        $this->order->save();
        $this->assertDatabaseHas('orders', [
            'id' => $this->order->id,
            'ship_address' => $this->order->ship_address,
        ]);
    }

    public function test_show_list_order(){
        $list_order = $this->user->orders;
        $this->get(route('list_order', $this->user->id))->assertStatus(200);
        foreach($list_order as $order){
            $this->assertInstanceOf(Order::class, $order);
            $this->assertDatabaseHas('orders', [
                'id' => $order->id,
            ]);
        }
    }
}
