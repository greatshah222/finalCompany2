<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('settings.settings')->with('settings',Setting::first());
    }
    public function update()
    {
        dd(request()->all());
        $settings =Setting::first();

    }
}
