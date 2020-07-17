<?php

namespace App\Http\Controllers;

use App\Guide;
use App\Http\Requests\GuideStoreRequest;
use App\Http\Requests\GuideUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GuideController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $guides = Guide::all();

        return view('guide.index', compact('guides'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('guide.create');
    }

    /**
     * @param \App\Http\Requests\GuideStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuideStoreRequest $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->image->store('images');
        }else{
            $image = null;
        }

        $guide = Guide::create([
            'name'          => $request->name,
            'slug'          => Str::slug($request->name,'-'),
            'description'   => $request->description,
            'icon'          => $request->icon,            
            'image'         => $image,
            'user_id'       => auth()->user()->id,
        ]);

        $request->session()->flash('guide.id', $guide->id);

        return redirect()->route('guide.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Guide $guide
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Guide $guide)
    {
        return view('guide.show', compact('guide'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Guide $guide
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Guide $guide)
    {
        return view('guide.edit', compact('guide'));
    }

    /**
     * @param \App\Http\Requests\GuideUpdateRequest $request
     * @param \App\Guide $guide
     * @return \Illuminate\Http\Response
     */
    public function update(GuideUpdateRequest $request, Guide $guide)
    {

        if ($request->hasFile('image')) {
            $image = $request->image->store('images');
        }else{
            $image = $guide->image;
        }

        $guide->update([
            'name'          => $request->name,
            'slug'          => Str::slug($request->name,'-'),
            'description'   => $request->description,
            'icon'          => $request->icon,            
            'image'         => $image,
        ]);

        $request->session()->flash('success', 'Guide updated successfully');

        return redirect()->route('guide.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Guide $guide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Guide $guide)
    {
        Storage::delete($guide->image);
        $guide->delete();

        return redirect()->route('guide.index');
    }
}
