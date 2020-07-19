<?php

namespace App\Http\Controllers;

use App\File;
use App\Tool;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {      
        $search =request()->query('search');


        if (!empty(request())) {
            if ($search) {
                $tools = Tool::where('name','LIKE', "%{$search}%")->paginate(12);
            }else{
                $tools = Tool::taxonomy(request()->taxonomy)->phase(request()->phase)->paginate(12);
            }            
        }else{
            $tools = Tool::paginate(12);
        }

        return view('welcome')->with('tools', $tools);
    }

    public function show(Tool $tool)
    {        
        $download = File::where('tool_id', $tool->id)->whereNotIn('type',['example'])->latest('id')->first();
        return view('detail')->with('tool', $tool)->with('download', $download);
    }
}