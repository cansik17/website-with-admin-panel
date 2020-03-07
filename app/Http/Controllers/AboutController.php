<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class AboutController extends Controller

{
    public function __construct() {
        view()->share('settings',Setting::find(1));
    }

   public function about()
   {
    return view('front.about');
   }
 
}
