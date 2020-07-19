<?php

namespace App\Http\Controllers;

use App\File;
use App\Http\Requests\ToolStoreRequest;
use App\Http\Requests\ToolUpdateRequest;
use App\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        $download = File::where('tool_id', $tool->id)->whereNotIn('type',['example'])->latest('id')->first();
        //dd($file);
        return view('tool.show', compact('tool'))->with('download', $download);
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

        //dd($request->all());
        
        $tool->update([
            'name'          => $request->name,
            'slug'          => Str::slug($request->name, '-'),
            'tagline'       => $request->tagline,
            'participants'  => $request->participants,
            'icon'          => $request->icon,                        
            'excerpt'       => $request->excerpt,
            'description'   => $request->description,
            'tips'          => $request->tips,
            'duration'      => $request->duration,
            'duration_unit' => $request->duration_unit,            
        ]);

        if ($request->hasFile('image')) {            
            $tool->update([ 'image' => $request->image->store('tools') ]);
        }

        if ($request->has('questions')) {
            $tool->questions()->sync($request->questions);
        }

        if ($request->has('phases')) {
            $tool->phases()->sync($request->phases);
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

        if ($request->has('guides')) {
            $tool->guides()->sync($request->guides);            
        }

        if ($request->has('industries')) {
            $tool->industries()->sync($request->industries);            
        }
        
        if ($request->has('files')) {  
            
            foreach ($tool->files as $item) {                
                $item->tool_id = null;
                $item->save();                
            }

            $selectedFiles = [];                        
            foreach ($request['files'] as $item) {
                $f = \App\File::findOrFail($item);
                $selectedFiles[] = $f;
            }                      
            
            $tool->files()->saveMany($selectedFiles);
        }

        if ($request->has('videos')) {
            
            foreach ($tool->videos as $item) {                
                $item->tool_id = null;
                $item->save();                
            }

            $selectedVideos = [];
            foreach ($request->videos as $item) {
                $v = \App\Video::find($item);
                $selectedVideos[] = $v;
            }
            $tool->videos()->saveMany($selectedVideos);            
        }

        session()->flash('success','Tool updated successfully');

        return redirect(route('tool.index'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Tool $tool
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Tool $tool)
    {
        Storage::delete($tool->image);
        $tool->delete();

        return redirect()->route('tool.index');
    }
}