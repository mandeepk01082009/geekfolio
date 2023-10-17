<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About; 

class AboutController extends Controller
{
    public function index()
    {
        return view('admin.about.form');              
    }

   
    public function create(Request $request)  
    {
     $data = $request->validate([
     'title' => 'required',
     'description' => 'required',
     'image' => 'required',    
 ]);
 
 $about = About::create([
    'title' => $request->input('title'), 
    'description' => $request->input('description'), 
    'image' => '',
 ]);
 
 
 if($request->has('image')) {
 
             $file = $request->file('image');
             $extention = $file->getClientOriginalName();
             $filename = time(). '.' . $extention;
             $file->move('storage/',$filename);
             $about->image = $filename;         
     }
 
     $about->save();
 
  //return response()->json(['success'=>'Files uploaded successfully.']); 
  
  return redirect('/gogo-admin/about');   
 
 }

 public function show()
    {  
        $image = About::all();
        return view('admin.about.index')           
            ->with('image', $image);         
    }

    public function edit(string $id)
    {
        $about = About::find($id);                 
        // show the edit form and pass the   
        return view('admin.about.edit',compact('about'));         
    }    

    public function update(Request $request, string $id)
    {
       
        $about = About::find($id);  
        
        $about->title = $request->input('title');

        $about->description = $request->input('description');

        if($request->has('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalName();     
            $filename = time(). '.' . $extention;
            $file->move('storage/',$filename);
            $about->image = $filename;          
    }
    
    $about->update();                 

    return redirect('/gogo-admin/about');        
    }

    public function destroy(string $id)             
    {
        $about = About::find($id);    
        $about->delete();        
        return redirect('/gogo-admin/about');                                                                  
    }


}
