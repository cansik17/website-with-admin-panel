<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=Slider::orderBy('order', 'ASC')->get();
        //dd($sliders);

        return view ('back.sliders', compact('sliders'));
    }

    public function edit($id)

    {
        $sliders= Slider::findOrFail($id);
        // dd($sliders);
        // die();
        return view ('back.slidersedit', compact('sliders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            
            'image'=>'image|mimes:jpeg,png,jpg|max:2048'
          ]);
    
          $slider= Slider::findOrFail($id);
          $slider->firstTitle=$request->firstTitle;
          $slider->secondTitle=$request->secondTitle;
         
    
          if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('front\img\hero-slider'), $filename);
            $slider->image = 'front/img/hero-slider/'.$filename;
        }
          $slider->save();
          toastr()->success( 'The operation completed successfully');
          return redirect()->route('dashboard.sliders.index');
    }


}
