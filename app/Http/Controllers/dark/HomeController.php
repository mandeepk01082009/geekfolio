<?php

namespace App\Http\Controllers\dark;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider; 
use App\Models\About; 
use App\Models\Clients;
use App\Models\Event;
use App\Models\Contact;
use Mail;

class HomeController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        $about = About::all();
        $clients = Clients::all();
        $event = Event::all();
        return view('dark.home-main',compact('slider','about','clients','event'));
    }

    public function creative()
    {
        return view('dark.home-creative');
    }

    public function contact()
    {
        return view('dark.contact');  
    }

    public function sendEmail(Request $request) 
    { 

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();
        //return response()->json(['success'=>'Data uploaded successfully.']); 

        \Mail::send('dark.contact_email',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'user_message' => $request->get('message'),
        ), function($message) use ($request)
          {
             $message->from($request->email);
             $message->subject('Thanks for contacting Amrit Soap'); 
             $message->to('geminiadvt@gmail.com');  
          });
        
        return back()->with('success', 'Thank you for contact us!');

    }


    public function portfolio()
    {
        return view('dark.portfolio');  
    }
}
