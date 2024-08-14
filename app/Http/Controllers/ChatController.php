<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\Message;
use Auth;
use App\Events\MessageSent;

class ChatController extends Controller
{
    public function redirectToChatify()
    {
        return redirect('/chatify');
    }
    
    public function loadUserChats(Request $request)
    {
        $query = $request->get('query');
        $userId = Auth::id();

        $chats = Chat::where('user_id', $userId)
            ->where(function($q) use ($query) {
                if ($query) {
                    $q->where('user_name', 'like', "%{$query}%")
                      ->orWhere('user_last_chat', 'like', "%{$query}%");
                }
            })
            ->get();

        $output = '';
        foreach ($chats as $chat) {
            $output .= '<a href="javascript:void(0);" class="media d-flex chat-user" data-chat-id="' . $chat->id . '" data-receiver-name="' . $chat->user_name . '" data-receiver-image="' . asset('assets/img/customer/' . $chat->user_image) . '">
                            <div class="media-img-wrap flex-shrink-0">
                                <div class="avatar ' . ($chat->is_online ? 'avatar-online' : 'avatar-away') . '">
                                    <img src="' . asset('assets/img/customer/' . $chat->user_image) . '" alt="User Image" class="avatar-img rounded-circle">
                                </div>
                            </div>
                            <div class="media-body flex-grow-1">
                                <div>
                                    <div class="user-name">' . $chat->user_name . '</div>
                                    <div class="user-last-chat">' . $chat->user_last_chat . '</div>
                                </div>
                                <div>
                                    <div class="last-chat-time">' . $chat->last_chat_time . '</div>
                                    ' . ($chat->unread_count ? '<div class="badge badge-success badge-pill">' . $chat->unread_count . '</div>' : '') . '
                                </div>
                            </div>
                        </a>';
        }

        return response()->json($output);
    }

    public function loadMessages(Request $request)
    {
        $chatId = $request->get('chat_id');
        $page = $request->get('page', 1);
        $perPage = 10;
    
        $messages = Message::where('chat_id', $chatId)
            ->orderBy('created_at', 'desc')
            ->paginate($perPage, ['*'], 'page', $page);
    
        $output = '';
        foreach ($messages as $message) {
            $output .= '<li class="media ' . ($message->sender_id == Auth::id() ? 'sent' : 'received') . ' d-flex">
                            <div class="avatar flex-shrink-0">
                                <img src="' . asset('assets/img/customer/' . ($message->sender_id == Auth::id() ? 'customer5.jpg' : 'profile2.jpg')) . '" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                            <div class="media-body flex-grow-1">
                                <div class="msg-box">
                                    <div>
                                        <p>' . $message->message . '</p>
                                        <ul class="chat-msg-info">
                                            <li>
                                                <div class="chat-time">
                                                    <span>' . $message->created_at->format('h:i A') . '</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>';
        }
    
        return response()->json(['messages' => $output, 'next_page' => $messages->currentPage() + 1]);
    }

    public function sendMessage(Request $request)
    {
        $message = Message::create([
            'chat_id' => $request->chat_id,
            'sender_id' => Auth::id(),
            'message' => $request->message,
        ]);
    
        broadcast(new MessageSent($message))->toOthers();
    
        return response()->json(['status' => 'Message sent']);
    }
}