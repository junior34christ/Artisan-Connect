<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function index()
    {
        // Récupérer les notifications paginées, par exemple 10 par page
        $notifications = Notification::with('user')->orderBy('created_at', 'desc')->paginate(10);

        return view('notifications.index', compact('notifications'));
    }
}
