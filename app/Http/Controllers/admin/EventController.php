<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category; 
use App\Models\Event; 

class EventController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.event.form',compact('category'));                         
    }

    public function create(Request $request)  
    {
        $data = $request->validate([
            'category_id' => 'required',
            'sort_col' => 'required|integer',
            'name' => 'required',
            'height' => 'required',
            'image' => 'required|image',
]);

$event = Event::create([
     'category_id' => $request->category_id,
     'sort_col' => $request->input('sort_col'),
     'name' => $request->input('name'),
     'height' => $request->input('height'),
     'image' => '', 
]);


if($request->has('image')) {  
            $file = $request->file('image');
            $extention = $file->getClientOriginalName();
            $filename = time(). '.' . $extention;
            $file->move('storage/',$filename);
            $event->image = $filename;       
    }

    $event->save(); 

return redirect('/gogo-admin/events');      


//return response()->json(['success'=>'Files uploaded successfully.']);

 }

 public function show()
    {  
       // $image = Event::all();
        $image= Event::orderBy('sort_col', 'asc')->get();
        return view('admin.event.index')           
            ->with('image', $image);         
    }

    public function edit(string $id)
    {
        $category = Category::all();
        $event = Event::find($id);             
        // show the edit form and pass the     
        return view('admin.event.edit',compact('category','event'));    
       
    }   

    public function update(Request $request, string $id)
    {
        
        $event = Event::find($id);   

        $event->category_id = $request->input('category_id');
        
        $event->sort_col = $request->input('sort_col');

        $event->name = $request->input('name');

        $event->height = $request->input('height');

        if($request->has('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalName();     
            $filename = time(). '.' . $extention;
            $file->move('storage/',$filename);
            $event->image = $filename;          
    }
    
    $event->update();                 

    return redirect('/gogo-admin/events');               
    }

    public function destroy(string $id)               
    {
        $event = Event::find($id);   
        $event->delete();          
        return redirect('/gogo-admin/events');                                                                       
    }

}