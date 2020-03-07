<?php

namespace App\Http\Controllers\Front;

use App\Feature;
use App\Http\Controllers\Controller;
use App\Program;
use App\Setting;
use App\Slider;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {
        view()->share('settings',Setting::find(1));
    }

    public function index()
    {
        $sliders= Slider::orderBy('order','ASC')->get();
        $features= Feature::orderBy('order','ASC')->get();
        $programs= Program::orderBy('order','ASC')->get();

        return view('front.index',compact('sliders','features','programs'));
    }

   
}
