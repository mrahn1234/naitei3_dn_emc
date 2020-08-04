<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\User;
use Faker\Factory as Faker;
use Tests\TestCase;

class CommentTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    private $faker;
    protected $user, $comment, $product;

    protected function setUp(): void
    {
        parent::setUp();
        $this->faker = Faker::create();
        $this->user = factory(User::class)->create();
        $this->product = factory(Product::class)->create();
        $this->comment = $this->user->comments()->create([
            'product_id' => $this->product->id
        ]);
    }

    public function test_it_has_many_commentContents(){
        $commentContent = $this->comment->commentContents()->create([
            'content' => $this->faker->text,
        ]);

        $this->assertTrue($this->comment->commentContents->contains($commentContent));
    }

    public function test_it_belongsTo_user_and_product(){
        $this->assertInstanceOf(User::class, $this->comment->user);
        $this->assertInstanceOf(Product::class, $this->comment->product);
    }
}
