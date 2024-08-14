<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function chat()
    {
        // Logique pour la page de chat
        return view('application.chat');
    }

    public function calendar()
    {
        // Logique pour la page de calendrier
        return view('application.calendar');
    }

    public function email()
    {
        // Logique pour la page d'email
        return view('application.email');
    }
}