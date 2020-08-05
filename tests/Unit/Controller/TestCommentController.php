<?php

namespace Tests\Unit;

use App\Models\Comment;
use App\Models\CommentContent;
use App\Models\Product;
use App\Models\User;
use Faker\Factory as Faker;
use Tests\TestCase;

class TestCommentController extends TestCase
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

    public function test_store()
    {
        $this->get(route('create_comment'))->assertStatus(405);
        $this->assertInstanceOf(Comment::class, $this->comment);
        $this->assertInstanceOf(CommentContent::class, $this->commentContent);
        $this->assertDatabaseHas('comments', [
            'user_id' => $this->comment->user_id,
            'product_id' => $this->comment->product_id,
        ]);
        $this->assertDatabaseHas('comment_contents', [
            'content' => $this->commentContent->content,
        ]);
    }

    public function test_show(){
        $found_comment = Comment::findOrFail($this->comment->id);
        $found_commentContent = CommentContent::findOrFail($this->commentContent->id);
        $this->assertInstanceOf(Comment::class, $found_comment);
        $this->assertInstanceOf(CommentContent::class, $found_commentContent);
        $this->assertEquals($this->comment->user_id, $found_comment->user_id);
        $this->assertEquals($this->commentContent->content, $found_commentContent->content);
    }
    public function test_destroy()
    {
        $destroy_comment_content = $this->commentContent->delete();
        // Kiểm tra dữ liệu có trả về true hay không
        $this->assertTrue($destroy_comment_content);;
        // kiểm tra xem dữ liệu đã được xóa trong cơ sở dữ liệu hay chưa
        $this->assertDatabaseMissing('comment_contents', [
            'content' => $this->commentContent->content,
        ]);
    }

    public function test_update(){
        $this->commentContent->content = $this->faker->text;
        $updated = $this->commentContent->save();
        $this->assertTrue($updated);
        $this->assertDatabaseHas('comment_contents', [
            'content' => $this->commentContent->content,
        ]);
    }
}
