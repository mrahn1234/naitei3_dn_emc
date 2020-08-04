<?php

namespace Tests\Unit;

use App\Models\Chatbox;
use App\Models\User;
use Faker\Factory as Faker;
use Tests\TestCase;

class MessageTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    protected $sender, $receiver, $chatbox, $message, $faker;

    protected function setUp(): void
    {
        parent::setUp();
        $this->faker = Faker::create();
        $this->sender = factory(User::class)->create();
        $this->receiver = factory(User::class)->create();
        $this->chatbox = Chatbox::create([
            'sender_id' => $this->sender->id,
            'receiver_id' => $this->receiver->id,
        ]);
        $this->message = $this->chatbox->messages()->create([
            'content' => $this->faker->text,
        ]);
    }

    public function test_it_belongsTo_chatbox()
    {
        $this->assertInstanceOf(Chatbox::class, $this->message->chatbox);
    }
}
