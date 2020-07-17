<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResourceStoreRequest;
use App\Http\Requests\ResourceUpdateRequest;
use App\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ResourceController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $resources = Resource::all();

        return view('resource.index', compact('resources'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('resource.create');
    }

    /**
     * @param \App\Http\Requests\ResourceStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResourceStoreRequest $request)
    {
        $resource = Resource::create($request->all());

        $request->session()->flash('success', 'Resource added successfully');

        return redirect()->route('resource.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Resource $resource
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Resource $resource)
    {
        return view('resource.show', compact('resource'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Resource $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Resource $resource)
    {
        return view('resource.edit', compact('resource'));
    }

    /**
     * @param \App\Http\Requests\ResourceUpdateRequest $request
     * @param \App\Resource $resource
     * @return \Illuminate\Http\Response
     */
    public function update(ResourceUpdateRequest $request, Resource $resource)
    {
        if ($request->hasFile('image')) {
            $image = $request->image->store('images');
        }else{
            $image = $resource->image;
        }

        $resource->update([
            'name'          => $request->name,
            'slug'          => Str::slug($request->name,'-'),
            'description'   => $request->description,
            'icon'          => $request->icon,
            'affiliate_url' => $request->affiliate_url,
            'image'         => $image,
        ]);

        $request->session()->flash('success', 'Resource updated successfully');

        return redirect()->route('resource.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Resource $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Resource $resource)
    {
        Storage::delete($resource->image);
        $resource->delete();

        return redirect()->route('resource.index');
    }
}
