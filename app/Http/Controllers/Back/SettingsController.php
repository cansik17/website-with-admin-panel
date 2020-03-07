<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;


class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings=Setting::find(1);

        return view('back.settings', compact('settings'));
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $settings=Setting::find(1);
        $settings->title=$request->title;
        $settings->phone=$request->phone;
        $settings->address=$request->address;
        $settings->email=$request->email;

        $settings->facebook=$request->facebook;
        $settings->twitter=$request->twitter;
        $settings->linkedin=$request->linkedin;
        $settings->google=$request->google;        
        $settings->instagram=$request->instagram;
  
        if($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $filename = $logo->getClientOriginalName();
            $logo->move(public_path('front\img'), $filename);
            $settings->logo = 'front/img/'.$filename;
        }
    
        $settings->save();
        toastr()->success( 'The operation completed successfully');
        return redirect()->back();
    }


}
