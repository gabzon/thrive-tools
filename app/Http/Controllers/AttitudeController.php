<?php

namespace App\Http\Controllers;

use App\Attitude;
use App\Http\Requests\AttitudeStoreRequest;
use App\Http\Requests\AttitudeUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AttitudeController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $attitudes = Attitude::all();

        return view('attitude.index', compact('attitudes'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('attitude.create');
    }

    /**
     * @param \App\Http\Requests\AttitudeStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AttitudeStoreRequest $request)
    {
        $attitude = Attitude::create($request->all());

        $request->session()->flash('attitude.id', $attitude->id);

        return redirect()->route('attitude.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Attitude $attitude
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Attitude $attitude)
    {
        return view('attitude.show', compact('attitude'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Attitude $attitude
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Attitude $attitude)
    {
        return view('attitude.edit', compact('attitude'));
    }

    /**
     * @param \App\Http\Requests\AttitudeUpdateRequest $request
     * @param \App\Attitude $attitude
     * @return \Illuminate\Http\Response
     */
    public function update(AttitudeUpdateRequest $request, Attitude $attitude)
    {
        if ($request->hasFile('image')) {
            $image = $request->image->store('images');
        }else{
            $image = $attitude->image;
        }

        $attitude->update([
            'name'          => $request->name,
            'slug'          => Str::slug($request->name,'-'),
            'description'   => $request->description,
            'icon'          => $request->icon,            
            'image'         => $image,
        ]);

        $request->session()->flash('success', 'Attitude updated successfully');

        return redirect()->route('attitude.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Attitude $attitude
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Attitude $attitude)
    {
        Storage::delete($attitude->image);
        $attitude->delete();

        session()->flash('success', 'Attitude deleted successfully!');

        return redirect()->route('attitude.index');
    }
}
