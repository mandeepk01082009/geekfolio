<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category; 

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.categories');                         
    }

    public function create(Request $request)  
    {
     $data = $request->validate([
     'name' => 'required',
     'image' => 'required',    
 ]);
 
 $categories = Category::create([
    'name' => $request->input('name'),  
    'image' => '',
 ]);
 
 
 if($request->has('image')) {  
 
             $file = $request->file('image');
             $extention = $file->getClientOriginalName();
             $filename = time(). '.' . $extention;
             $file->move('storage/',$filename);
             $categories->image = $filename;              
     }
 
     $categories->save();   
 
  //return response()->json(['success'=>'Data uploaded successfully.']); 
  
  return redirect('/categories');         
 
 }


 public function show()
    {  
        $image = Category::all();

        // load the view and pass the sharks
        return view('admin.categories.index')           
            ->with('image', $image);         
    }

    public function edit(string $id)
    {
        $category = Category::find($id);                 
        // show the edit form and pass the   
        return view('admin.categories.editcategory',compact('category'));            
    }   

    public function update(Request $request, string $id)
    {
       
        $category = Category::find($id);   
        
        $category->name = $request->input('name');

        if($request->has('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalName();     
            $filename = time(). '.' . $extention;
            $file->move('storage/',$filename);
            $category->image = $filename;          
    }
    
    $category->update();                 

    return redirect('/categories');               
    }

    public function destroy(string $id)               
    {
        $category = Category::find($id);   
        $category->delete();          
        return redirect('/categories');                                                                       
    }


}
