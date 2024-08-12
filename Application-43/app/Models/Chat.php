<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'user_name', 'user_last_chat', 'last_chat_time', 'unread_count', 'user_image', 'is_online'
    ];
}