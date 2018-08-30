<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class SettingsController extends Controller
{
    public function index()
    {
        return view('settings.settings')->with('settings',Setting::first());
    }

    public function update(Request $request)
    {










        $this->validate($request,[
            'site_name'=>'required',
            'address'=>'required',
            'contact_number'=>'required',
            'contact_email'=>'required',
            'about_us'=>'required'

        ]);
        $settings = Setting::first();
        $settings->site_name = $request->site_name;
        $settings->address =$request->address;

        $settings->contact_number =$request->contact_number;

        $settings->contact_email = $request->contact_email;

        $settings->about_us = $request ->about_us;
        $settings->save();
        return redirect()->back();


    }


}



