<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courturier;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function general()
    {
        // Logique pour la page des paramètres généraux
        return view('settings.generalsettings');
    }

    public function setting()
    {
        // Logique pour la page des paramètres généraux
        return view('settings.setting');
    }

    public function email()
    {
        // Logique pour la page des paramètres d'email
        return view('settings.emailsettings');
    }

    public function payment()
    {
        // Logique pour la page des paramètres de paiement
        return view('settings.paymentsettings');
    }

    public function currency()
    {
        // Logique pour la page des paramètres de devise
        return view('settings.currencysettings');
    }

    public function permissions()
    {
        // Logique pour la page des permissions de groupe
        return view('settings.grouppermissions');
    }

    public function tax()
    {
        // Logique pour la page des taux d'imposition
        return view('settings.taxrates');
    }

    
}