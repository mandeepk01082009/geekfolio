<?php

namespace App\Http\Controllers\dark;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dark.home-main');
    }

    public function port()
    {
        return view('dark.port');
    }

    public function contact()
    {
        return view('dark.contact');
    }
}
