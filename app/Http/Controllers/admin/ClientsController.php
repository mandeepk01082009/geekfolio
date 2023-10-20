<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clients; 

class ClientsController extends Controller
{
    public function index()
    {
        return view('admin.clients.form');              
    }

   
    public function create(Request $request)  
    {
     $data = $request->validate([
     'image' => 'required',    
 ]);
 
 $clients = Clients::create([
    'image' => '',
 ]);
 
 
 if($request->has('image')) {
 
             $file = $request->file('image');
             $extention = $file->getClientOriginalName();
             $filename = time(). '.' . $extention;
             $file->move('storage/',$filename);
             $clients->image = $filename;         
     }
 
     $clients->save();
 
  //return response()->json(['success'=>'Files uploaded successfully.']); 
  
  return redirect('/gogo-admin/clients');   
 
 }

 public function show()
    {  
        $image = Clients::all();

        // load the view and pass the sharks
        return view('admin.clients.index')           
            ->with('image', $image);         
    }

    public function edit(string $id)
    {
        $clients = Clients::find($id);                 
        // show the edit form and pass the   
        return view('admin.clients.edit',compact('clients'));         
    }    

    public function update(Request $request, string $id)
    {
       
        $clients = Clients::find($id);  

        if($request->has('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalName();     
            $filename = time(). '.' . $extention;
            $file->move('storage/',$filename);
            $clients->image = $filename;          
    }
    
    $clients->update();                 

    return redirect('/gogo-admin/clients');        
    }

    public function destroy(string $id)             
    {
        $clients = Clients::find($id);    
        $clients->delete();        
        return redirect('/gogo-admin/clients');                                                                  
    }


}
