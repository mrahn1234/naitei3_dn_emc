<?php

namespace Tests\Unit;

use App\Models\Comment;
use App\Models\Product;
use App\Models\User;
use Faker\Factory as Faker;
use Tests\TestCase;

class CommentContentTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    private $faker;
    protected $user, $comment, $commentContent, $product;

    protected function setUp(): void
    {
        parent::setUp();
        $this->faker = Faker::create();
        $this->user = factory(User::class)->create();
        $this->product = factory(Product::class)->create();
        $this->comment = $this->user->comments()->create([
            'product_id' => $this->product->id
        ]);
        $this->commentContent = $this->comment->commentContents()->create([
            'content' => $this->faker->text,
        ]);
    }

    public function test_it_belongsTo_comment()
    {
        $this->assertInstanceOf(Comment::class, $this->commentContent->comment);
    }
}
