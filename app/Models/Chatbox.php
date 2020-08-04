<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chatbox extends Model
{

    protected $fillable = [
        'sender_id',
        'receiver_id',
    ];

    public function sender(){
        return $this->belongsTo(User::class);
    }

    public function receiver(){
        return $this->belongsTo(User::class);
    }

    public function messages(){
        return $this->hasMany(Message::class);
    }
}
