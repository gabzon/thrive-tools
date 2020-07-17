<?php

namespace App\Http\Controllers;

use App\Http\Requests\ToolStoreRequest;
use App\Http\Requests\ToolUpdateRequest;
use App\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ToolController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tools = Tool::all();

        return view('tool.index', compact('tools'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('tool.create');
    }

    /**
     * @param \App\Http\Requests\ToolStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ToolStoreRequest $request)
    {
        $tool = Tool::create($request->all());

        $request->session()->flash('tool.id', $tool->id);

        return redirect()->route('tool.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Tool $tool
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Tool $tool)
    {
        return view('tool.show', compact('tool'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Tool $tool
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Tool $tool)
    {
        return view('tool.edit', compact('tool'));
    }

    /**
     * @param \App\Http\Requests\ToolUpdateRequest $request
     * @param \App\Tool $tool
     * @return \Illuminate\Http\Response
     */
    public function update(ToolUpdateRequest $request, Tool $tool)
    {
        
        $tool->update([
            'name'          => $request->name,
            'slug'          => Str::slug($request->name, '-'),
            'tagline'       => $request->tagline,
            'participants'  => $request->participants,
            'icon'          => $request->icon,
            'image'         => $request->image,            
            'excerpt'       => $request->excerpt,
            'description'   => $request->description,
            'tips'          => $request->tips,
            'duration'      => $request->duration,
            'duration_unit' => $request->duration_unit,            
        ]);

        if ($request->hasFile('image')) {            
            $tool->update([ 'image' => $request->image->store('tools') ]);
        }

        if ($request->has('taxonomies')) {
            $tool->taxonomies()->sync($request->taxonomies);
        }
        
        if ($request->has('attitudes')) {        
            $tool->attitudes()->sync($request->attitudes);
        }

        if ($request->has('resources')) {
            $tool->resources()->sync($request->resources);
        }

        if ($request->has('sources')) {
            $tool->sources()->sync($request->sources);
        }

        if ($request->has('files')) {
            $tool->files()->saveMany($request->files);
        }

        if ($request->has('videos')) {
            $tool->videos()->saveMany($request->videos);            
        }

        $request->session()->flash('success','Tool updated successfully');

        return redirect()->route('tool.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Tool $tool
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Tool $tool)
    {
        $tool->delete();

        return redirect()->route('tool.index');
    }
}