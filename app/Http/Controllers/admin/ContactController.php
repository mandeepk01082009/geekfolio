<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact; 
use Mail; 

class ContactController extends Controller
{
    public function contactus(Request $request) { 

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
        dd($contact);

        $contact->save();

        \Mail::send('dark.contact_email',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'user_message' => $request->get('message'),
        ), function($message) use ($request)
          {
             $message->from($request->email);
             $message->to('geminiadvt@gmail.com');  
          });
        
        return back()->with('success', 'Thank you for contact us!');

    }

    public function view()
    {
        $contact = Contact::all();
        return view('admin.contact.index',compact('contact'));
        
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/contact'); 

    }

}
