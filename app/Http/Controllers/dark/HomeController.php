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

    public function creative()
    {
        return view('dark.home-creative');
    }
}
