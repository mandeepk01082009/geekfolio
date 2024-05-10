<?php

namespace App\Http\Controllers\dark;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider; 
use App\Models\About; 
use App\Models\Clients; 
use App\Models\Event; 
use App\Models\Category; 
use App\Models\Contact;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail; 
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        $about = About::all();
        $clients = Clients::all();   
        $event = Event::all();
        $category = Category::with('events')->get();
        //dd($category[0]->messages->first()->name);
        return view('dark.home-main',compact('slider','about','clients','event','category'));
    }

    public function port()
    {
        $event = Event::all();
        $category = Category::with('events')->get();
        return view('dark.port',compact('event','category'));
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
             $message->subject('Contacted by' ." ". $request->name ); 
             $message->to('mandeepk01082009@gmail.com');
          });
        
        return back()->with('success', 'Thank you for contact us!');

    }

}


// php "C:\Users\TDV\AppData\Local\Programs\Microsoft VS Code\Code.exe" %f

// json "C:\Program Files\Microsoft Visual Studio\2022\Professional\Common7\IDE\devenv.exe" /dde
// php "C:\Program Files\Sublime Text 3\sublime_text.exe" %f
