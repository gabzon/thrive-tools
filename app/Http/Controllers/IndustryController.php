<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndustryStoreRequest;
use App\Http\Requests\IndustryUpdateRequest;
use App\Industry;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IndustryController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $industries = Industry::all();

        return view('industry.index', compact('industries'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('industry.create');
    }

    /**
     * @param \App\Http\Requests\IndustryStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(IndustryStoreRequest $request)
    {
        $industry = Industry::create($request->all());

        $request->session()->flash('industry.id', $industry->id);

        return redirect()->route('industry.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Industry $industry
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Industry $industry)
    {
        return view('industry.show', compact('industry'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Industry $industry
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Industry $industry)
    {
        return view('industry.edit', compact('industry'));
    }

    /**
     * @param \App\Http\Requests\IndustryUpdateRequest $request
     * @param \App\Industry $industry
     * @return \Illuminate\Http\Response
     */
    public function update(IndustryUpdateRequest $request, Industry $industry)
    {        
        $industry->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name,'-'),
            'description' => $request->description,
            'icon' => $request->icon,
            'sector' => $request->sector,            
        ]);

        if ($request->hasFile('image')) {
            $industry->update(['image'=> $request->image->store('images') ]);
        }

        $request->session()->flash('success', 'Industry updated successfully');

        return redirect()->route('industry.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Industry $industry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Industry $industry)
    {
        Storage::delete($industry->image);
        $industry->delete();

        return redirect()->route('industry.index');
    }
}
