<?php

namespace App\Http\Controllers\Back;

use App\Program;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs=Program::orderBy('order', 'ASC')->get();
        //dd($sliders);

        return view ('back.programs', compact('programs'));
    }

    
    public function edit($id)
    {
        $programs= Program::findOrFail($id);
        // dd($sliders);
        // die();
        return view ('back.programsedit', compact('programs'));
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
    
          $program= Program::findOrFail($id);
          $program->title=$request->title;
          $program->text=$request->text;
         
    
          if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('front\img\classes'), $filename);
            $program->image = 'front/img/classes/'.$filename;
        }
          $program->save();
        
         toastr()->success( 'The operation completed successfully');
          return redirect()->route('dashboard.programs.index');
    }

    
}
