<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider; 

class SliderController extends Controller
{
    public function index()
    {
        return view('admin.slider.form');              
    }

   
    public function create(Request $request)  
    {
     $data = $request->validate([
     'title' => 'required',
     'description' => 'required',
     'image' => 'required',    
 ]);
 
 $slider = Slider::create([
    'title' => $request->input('title'), 
    'description' => $request->input('description'), 
    'image' => '',
 ]);
 
 
 if($request->has('image')) {
 
             $file = $request->file('image');
             $extention = $file->getClientOriginalName();
             $filename = time(). '.' . $extention;
             $file->move('storage/',$filename);
             $slider->image = $filename;         
     }
 
     $slider->save();
  return redirect('/gogo-admin');   
 
 }

 public function show()
    {  
        $image = Slider::all();
        return view('admin.slider.index')           
            ->with('image', $image);         
    }

    public function edit(string $id)
    {
        $slider = Slider::find($id);                 
        // show the edit form and pass the   
        return view('admin.slider.edit',compact('slider'));         
    }    

    public function update(Request $request, string $id)
    {
       
        $slider = Slider::find($id);  
        
        $slider->title = $request->input('title');

        $slider->description = $request->input('description');

        if($request->has('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalName();     
            $filename = time(). '.' . $extention;
            $file->move('storage/',$filename);
            $slider->image = $filename;          
    }
    
    $slider->update();                 

    return redirect('/gogo-admin');        
    }

    public function destroy(string $id)             
    {
        $slider = Slider::find($id);    
        $slider->delete();        
        return redirect('/gogo-admin');                                                                  
    }



}
