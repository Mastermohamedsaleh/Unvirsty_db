<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Setting;

use App\Http\Requests\SettingRequest;

use Illuminate\Support\Facades\Session;


class SettingController extends Controller
{
     

    public function index(){
        $settings = Setting::all();
        return view('Admin.setting.index',compact('settings'));
    }

    public function update(SettingRequest $request ){

      
      
        try{
        $setting = Setting::findorFail($request->setting_id);

        $setting->unvirsty_name = $request->unvirsty_name;
        $setting->phone = $request->phone;
        $setting->address = $request->address;
        $setting->email = $request->email;
        $setting->link_facebook = $request->link_facebook;
        $setting->link_linked_in = $request->link_linked_in;
        $setting->link_twitter = $request->link_twitter;
        $setting->save();

        Session::flash('message', 'Update Success');       
        return redirect()->back();
    }
    catch(\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }



    }

}
