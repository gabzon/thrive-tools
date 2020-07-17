<?php

namespace App\Http\Controllers;

use App\File;
use App\Http\Requests\FileStoreRequest;
use App\Http\Requests\FileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $files = File::all();

        return view('file.index', compact('files'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('file.create');
    }

    /**
     * @param \App\Http\Requests\FileStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(FileStoreRequest $request)
    {
        $file = File::create($request->all());

        if ($request->hasFile('file')) {
            //$uploadedFile = $request->file('file');            
            $ext = $request->file->getClientOriginalExtension();            
            $filename = Str::slug($file->name,'-') . '-' . $file->lang . '-' . Str::slug($file->version,'.') . '.'. $ext;
            $file->update([ 'file' => $request->file->storeAs('files', $filename)]);
        }

        $request->session()->flash('Success', 'File added successfully');

        return redirect()->route('file.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\File $file
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, File $file)
    {
        return view('file.show', compact('file'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\File $file
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, File $file)
    {
        return view('file.edit', compact('file'));
    }

    /**
     * @param \App\Http\Requests\FileUpdateRequest $request
     * @param \App\File $file
     * @return \Illuminate\Http\Response
     */
    public function update(FileUpdateRequest $request, File $file)
    {
        $file->update([
            'name' => $request->name,
            'author' => $request->author,
            'version' => $request->version,
            'lang' => $request->lang,
            'type' => $request->type,
        ]);

        if ($request->hasFile('file')) {
            //$uploadedFile = $request->file('file');            
            $ext = $request->file->getClientOriginalExtension();            
            $filename = Str::slug($file->name,'-') . '-' . $file->lang . '-' . Str::slug($file->version,'.') . '.'. $ext;
            $file->update([ 'file' => $request->file->storeAs('files', $filename)]);
        }        

        $request->session()->flash('success', 'File updated successfully');

        return redirect()->route('file.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\File $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, File $file)
    {
        Storage::delete($file->file);
        $file->delete();

        return redirect()->route('file.index');
    }
}
