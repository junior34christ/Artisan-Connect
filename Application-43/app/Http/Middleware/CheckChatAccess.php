<?php

// app/Http/Middleware/CheckChatAccess.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Chat;

class CheckChatAccess
{
    public function handle($request, Closure $next)
    {
        $chatId = $request->route('chat_id');
        $chat = Chat::find($chatId);

        if ($chat && ($chat->user_id == Auth::id() || $chat->contact_id == Auth::id())) {
            return $next($request);
        }

        return redirect('/home');
    }
}