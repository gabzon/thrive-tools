<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaxonomyStoreRequest;
use App\Http\Requests\TaxonomyUpdateRequest;
use App\Taxonomy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TaxonomyController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $taxonomies = Taxonomy::all();

        return view('taxonomy.index', compact('taxonomies'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('taxonomy.create');
    }

    /**
     * @param \App\Http\Requests\TaxonomyStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaxonomyStoreRequest $request)
    {
        $taxonomy = Taxonomy::create($request->all());

        $request->session()->flash('taxonomy.id', $taxonomy->id);

        return redirect()->route('taxonomy.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Taxonomy $taxonomy
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Taxonomy $taxonomy)
    {
        return view('taxonomy.show', compact('taxonomy'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Taxonomy $taxonomy
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Taxonomy $taxonomy)
    {
        return view('taxonomy.edit', compact('taxonomy'));
    }

    /**
     * @param \App\Http\Requests\TaxonomyUpdateRequest $request
     * @param \App\Taxonomy $taxonomy
     * @return \Illuminate\Http\Response
     */
    public function update(TaxonomyUpdateRequest $request, Taxonomy $taxonomy)
    {
        if ($request->hasFile('image')) {
            $image = $request->image->store('images');
        }else{
            $image = $taxonomy->image;
        }

        $taxonomy->update([
            'name'          => $request->name,
            'slug'          => Str::slug($request->name,'-'),
            'description'   => $request->description,
            'icon'          => $request->icon,            
            'image'         => $image,
        ]);

        $request->session()->flash('success', 'Taxonomy updated successfully');

        return redirect()->route('taxonomy.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Taxonomy $taxonomy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Taxonomy $taxonomy)
    {
        Storage::delete($taxonomy->image);
        $taxonomy->delete();

        return redirect()->route('taxonomy.index');
    }
}
