<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhaseStoreRequest;
use App\Http\Requests\PhaseUpdateRequest;
use App\Phase;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PhaseController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $phases = Phase::all();

        return view('phase.index', compact('phases'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('phase.create');
    }

    /**
     * @param \App\Http\Requests\PhaseStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhaseStoreRequest $request)
    {
        $phase = Phase::create($request->all());

        $request->session()->flash('phase.id', $phase->id);

        return redirect()->route('phase.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Phase $phase
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Phase $phase)
    {
        return view('phase.show', compact('phase'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Phase $phase
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Phase $phase)
    {
        return view('phase.edit', compact('phase'));
    }

    /**
     * @param \App\Http\Requests\PhaseUpdateRequest $request
     * @param \App\Phase $phase
     * @return \Illuminate\Http\Response
     */
    public function update(PhaseUpdateRequest $request, Phase $phase)
    {
        if ($request->hasFile('image')) {
            $image = $request->image->store('images');
        }else{
            $image = $phase->image;
        }

        $phase->update([
            'name'          => $request->name,
            'slug'          => Str::slug($request->name,'-'),
            'description'   => $request->description,
            'icon'          => $request->icon,            
            'image'         => $image,
        ]);

        $request->session()->flash('success', 'Phase updated successfully');

        return redirect()->route('phase.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Phase $phase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Phase $phase)
    {
        Storage::delete($phase->image);
        $phase->delete();

        return redirect()->route('phase.index');
    }
}
