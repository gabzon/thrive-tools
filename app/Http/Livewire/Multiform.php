<?php

namespace App\Http\Livewire;

use App\Attitude;
use App\Guide;
use App\Industry;
use App\Phase;
use App\Resource;
use App\Taxonomy;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic;
use Livewire\Component;
use Livewire\WithFileUploads;


class Multiform extends Component
{
    use WithFileUploads;
    
    public string $title;
    public string $model;

    public $name;
    public $slug;
    public $description;
    public $icon;
    public $image;
    public $color;
    public $sector;    
    public $affiliate_url;

    // protected $listeners = ['fileUpload' => 'handleFileUpload'];

    // public function handleFileUpload($imageData)
    // {
    //     $this->image = $imageData;
    // }
    
    public function mount($model)
    {
        $this->model = $model;               
        $this->title = "Create " . $model;
    }

    public function updatedName($value)
    {        
        $this->slug = Str::slug($value, '-');
    }


    public function updated($fields)
    {        
        $this->validateOnly($fields, [
            'name' => 'required|max:100',
            'slug' => 'required',     
            'image' => 'nullable|image|max:1024|mimes:jpeg,jpg,png,gif',                      
        ]);
    }

    public function create()
    {
        $this->validate([
            'name' => 'required|max:100',
            'slug' => 'required',     
            'description' => 'nullable',    
            'image' => 'nullable|image|max:1024|mimes:jpeg,jpg,png,gif',               
        ]);
        
        $image = $this->storeImage();
        
        switch ($this->model) {
            case 'attitude':
                $attitude = Attitude::create($this->setFields());
                $attitude->update(['image'=> $image ]);
                break;
            case 'industry':
                $industry = Industry::create($this->setFields());                
                $industry->update(['image'=> $image ]);
                if ($this->sector) {
                    $phase->sector = $this->sector;
                }
                break;
            case 'guide':
                $guide = Guide::create($this->setFields());
                $guide->update(['image'=> $image ]);
                break;
            case 'phase':
                $phase = Phase::create($this->setFields());
                $phase->color = $this->color;
                $phase->update(['image'=> $image ]);
                break;
            case 'taxonomy':
                $taxonomy = Taxonomy::create($this->setFields());
                $taxonomy->update(['image'=> $image ]);
                break;            
            default:
                $resource = Resource::create($this->setFields());
                $resource->update(['image'=> $image ]);
                $resource->affiliate_url = $this->affiliate_url;
                break;
        }

        session()->flash('success', $this->model . ' added succesfully');

        return redirect(route($this->model . '.index'));
    }

    public function storeImage()
    {
        if (! $this->image) return null;       

        return $this->image->store('images');
    }

    public function render()
    {
        return view('livewire.multiform');
    }

    public function setFields()
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'icon' => $this->icon,
            'image' => $this->image,
            'description' => $this->description,
        ];
    }
}