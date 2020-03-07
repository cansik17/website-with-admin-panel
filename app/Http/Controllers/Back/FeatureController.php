<?php

namespace App\Http\Controllers\Back;

use App\Feature;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features=Feature::orderBy('order', 'ASC')->get();
        //dd($sliders);

        return view ('back.features', compact('features'));
    }

   
    public function edit($id)
    {
        $features= Feature::findOrFail($id);
        // dd($sliders);
        // die();
        return view ('back.featuresedit', compact('features'));
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
    
          $feature= Feature::findOrFail($id);
          $feature->title=$request->title;
          $feature->text=$request->text;
         
    
          if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('front\img\feature'), $filename);
            $feature->image = 'front/img/gallery/'.$filename;
        }
          $feature->save();
          toastr()->success( 'The operation completed successfully');
          return redirect()->route('dashboard.features.index');
    }

    
}
