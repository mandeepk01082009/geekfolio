<?php

namespace App\Http\Controllers\dark;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider; 

class HomeController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        return view('dark.home-main',compact('slider'));
    }

    public function creative()
    {
        return view('dark.home-creative');
    }

    public function contact()
    {
        return view('dark.contact');  
    }

    public function about()
    {
        return view('dark.about');  
    }

    public function portfolio()
    {
        return view('dark.portfolio');  
    }
}
