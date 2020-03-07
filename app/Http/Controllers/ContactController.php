<?php

namespace App\Http\Controllers;

use App\Setting;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
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
      
         return view('front.contact');
       
    }

    
    public function mail(Request $request)
    {
        $request->validate([
            
            'name'=>'required|min:3',
            'email'=>'required|email',
            'message'=>'required|min:10'

          ]);

        //   if($validate->fails()){
        //     return redirect()->route('contact')->withErrors($validate)->withInput();
        //   }
        
    
         
    
          Mail::send([],[], function($message) use($request){
            $message->from('info@fitandfurius.com','FitAndFurius');
            $message->to('blegojcan@gmail.com');
            $message->setBody(' Mesajı Gönderen :'.$request->name.'<br />
                        Mesajı Gönderen Mail :'.$request->email.'<br />
                        Mesaj :'.$request->message.'<br /><br />
                        Mesaj Gönderilme Tarihi : '.now().'','text/html');
            $message->subject($request->name. ' iletişimden mesaj gönderdi!');
          });
    
          // $contact = new Contact;
          // $contact->name=$request->name;
          // $contact->email=$request->email;
          // $contact->topic=$request->topic;
          // $contact->message=$request->message;
          // $contact->save();
          toastr()->success('Great!', 'Thank you! Your message has been successfully sent. ... ');
          return redirect()->route('contact');
        }
    }

  

