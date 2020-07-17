<?php

namespace App\Http\Controllers;

use App\Http\Requests\SourceStoreRequest;
use App\Http\Requests\SourceUpdateRequest;
use App\Source;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SourceController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sources = Source::all();

        return view('source.index', compact('sources'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('source.create');
    }

    /**
     * @param \App\Http\Requests\SourceStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SourceStoreRequest $request)
    {
        $source = Source::create($request->all());        

        if ($request->hasFile('image')) {                    
            $source->update([ 'image' => $request->image->store('images') ]);
        }

        $request->session()->flash('success', 'Source added successfully');

        return redirect()->route('source.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Source $source
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Source $source)
    {
        return view('source.show', compact('source'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Source $source
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Source $source)
    {
        return view('source.edit', compact('source'));
    }

    /**
     * @param \App\Http\Requests\SourceUpdateRequest $request
     * @param \App\Source $source
     * @return \Illuminate\Http\Response
     */
    public function update(SourceUpdateRequest $request, Source $source)
    {        
        $source->update($this->setFields($request));

        if ($request->hasFile('image')) {                   
            $source->update([ 'image' => $request->image->store('images') ]);
        }

        $request->session()->flash('success', 'Source updated successfully!');

        return redirect()->route('source.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Source $source
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Source $source)
    {
        Storage::delete($source->image);
        $source->delete();

        return redirect()->route('source.index');
    }

    public function setFields($request)
    {
        return [
            'type'          => $request->type,
            'author'        => $request->author,
            'title'         => $request->title,
            'location'      => $request->location,
            'publisher'     => $request->publisher,
            'year'          => $request->year,
            'isbn10'        => $request->isbn10,
            'isbn13'        => $request->isbn13,
            'url'           => $request->url,
            'chapter_title' => $request->chapter_title,
            'pages'         => $request->pages,
            'affiliate_link' => $request->affiliate_link,            
            'visited_on'    => $request->visited_on,
            'number'        => $request->number,
            'volume'        => $request->volume,
            'edition'       => $request->edition,
        ];
    }
}



