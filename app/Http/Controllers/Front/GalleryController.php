<?php

namespace App\Http\Controllers\Front;

use App\Gallery;
use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;

class GalleryController extends Controller
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
        $galleries=Gallery::orderBy('id','DESC')->paginate(8);

        return view('front.gallery', compact('galleries'));
    }

  
}
