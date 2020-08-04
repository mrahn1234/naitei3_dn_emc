<?php

namespace Tests\Unit;

use App\Models\Chatbox;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Tests\TestCase;

class ChatboxTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    protected $sender, $receiver, $chatbox;

    protected function setUp(): void
    {
        parent::setUp();
        $this->sender = factory(User::class)->create();
        $this->receiver = factory(User::class)->create();
        $this->chatbox = Chatbox::create([
            'sender_id' => $this->sender->id,
            'receiver_id' => $this->receiver->id,
        ]);
    }
    public function test_it_belongsTo_user_and_hasMany_message()
    {
        $this->assertInstanceOf(User::class, $this->chatbox->sender);
        $this->assertInstanceOf(User::class, $this->chatbox->receiver);
        $this->assertInstanceOf(HasMany::class, $this->chatbox->messages());
    }
}
