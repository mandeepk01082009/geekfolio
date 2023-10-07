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
            'image' => 'required|image',
]);

$event = Event::create([
     'category_id' => $request->category_id,
     'sort_col' => $request->input('sort_col'),
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

return redirect('/events');      


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

        if($request->has('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalName();     
            $filename = time(). '.' . $extention;
            $file->move('storage/',$filename);
            $event->image = $filename;          
    }
    
    $event->update();                 

    return redirect('/events');               
    }

    public function destroy(string $id)               
    {
        $event = Event::find($id);   
        $event->delete();          
        return redirect('/events');                                                                       
    }

    public function display($id)    
    {
        $pack = OurPacks::where('id', $id)->get();   
        $packdetail = PackDetail::where('pack_id', $id)->get();   
        return view('frontend.packdetails',compact('pack','packdetail'));      
    }

}
