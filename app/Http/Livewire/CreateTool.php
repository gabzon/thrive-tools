<?php

namespace App\Http\Livewire;

use App\Tool;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class CreateTool extends Component
{
    use WithFileUploads;

    public $name;    
    public $tagline;
    public $participants;
    public $icon;
    public $image;
    public $excerpt;
    public $description;
    public $tips;
    public $duration;
    public $duration_unit;
    public $taxonomies;
    public $attitudes;
    public $questions;
    public $guides;
    public $phases;
    public $industries;
    public $resources;
    public $sources;
    public $files;
    public $videos;

    public function updated($fields){

        $this->validateOnly($fields, [
            'name' => 'required|max:100',                
            'description' => 'nullable',    
            'icon'  => 'nullable|string',
            'image' => 'nullable|image|max:1024|mimes:jpeg,jpg,png,gif',                        
        ]);
    }

    public function updatedImage($value)
    {        
        $this->image = $value;
        $this->image = $this->image->store('tools');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|max:100',                
            'description' => 'nullable',    
            'icon'  => 'nullable|string',                        
        ]);

        $image = $this->storeImage();

        //dd($this);

        $tool = Tool::create([
            'name'          => $this->name,
            'slug'          => Str::slug($this->name, '-'),
            'tagline'       => $this->tagline,
            'participants'  => $this->participants,
            'icon'          => $this->icon,
            'image'         => $this->image,            
            'excerpt'       => $this->excerpt,
            'description'   => $this->description,
            'tips'          => $this->tips,
            'duration'      => $this->duration,
            'duration_unit' => $this->duration_unit,
            'user_id'       => auth()->user()->id,
        ]);
        
        
        if ($this->taxonomies) {
            $tool->taxonomies()->attach($this->taxonomies);
        }
                
        if ($this->attitudes) {
            $tool->attitudes()->attach($this->attitudes);
        }

        if ($this->questions) {
            $tool->questions()->attach($this->questions);
        }

        if ($this->guides) {
            $tool->guides()->attach($this->guides);
        }

        if ($this->phases) {
            $tool->phases()->attach($this->phases);
        }

        if ($this->industries) {
            $tool->industries()->attach($this->industries);
        }

        if ($this->resources) {
            $tool->resources()->attach($this->resources);
        }

        if ($this->sources) {
            $tool->sources()->attach($this->sources);
        }

        if ($this->files) {
            $selectedFiles = [];
            foreach ($this->files as $item) {
                $v = \App\File::find($item);
                $selectedFiles[] = $v;
            }
            $tool->files()->saveMany($selectedFiles);
        }

        if ($this->videos) {
            $selected_videos = [];
            foreach ($this->videos as $item) {
                $v = \App\Video::find($item);
                $selected_videos[] = $v;
            }
            $tool->videos()->saveMany($selected_videos);
        }
        
        session()->flash('success', 'Tool Added succesfully');

        return redirect(route('tool.index'));
    }

    public function storeImage()
    {
        if (! $this->image) return null;       

        return $this->image;
    }

    public function render()
    {
        return view('livewire.create-tool');
    }
}
