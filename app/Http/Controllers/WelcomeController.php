<?php

namespace App\Http\Controllers;

use App\Tool;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome')->with('tools', Tool::all());
    }

    public function show(Tool $tool)
    {
        return view('detail')->with('tool', $tool);
    }
}
