<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tool extends Model
{
    use SoftDeletes;
    use SearchableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'tagline',
        'participants',
        'icon',
        'image',
        'image_file',
        'excerpt',
        'description',
        'tips',
        'duration',
        'duration_unit',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
    ];


    public function attitudes()
    {
        return $this->belongsToMany(\App\Attitude::class);
    }

    public function hasAttitude($id)
    {
        return in_array($id, $this->attitudes->pluck('id')->toArray());
    }

    public function resources()
    {
        return $this->belongsToMany(\App\Resource::class);
    }

    public function hasResource($id)
    {
        return in_array($id, $this->resources->pluck('id')->toArray());
    }

    public function sources()
    {
        return $this->belongsToMany(\App\Source::class);
    }

    public function hasSource($id)
    {
        return in_array($id, $this->sources->pluck('id')->toArray());
    }

    public function taxonomies()
    {
        return $this->belongsToMany(\App\Taxonomy::class);
    }

    public function hasTaxonomy($id)
    {
        return in_array($id, $this->taxonomies->pluck('id')->toArray());
    }

    public function files()
    {
        return $this->hasMany(\App\File::class);
    }

    public function hasFile($id)
    {
        return in_array($id, $this->files->pluck('id')->toArray());
    }

    public function videos()
    {
        return $this->hasMany(\App\Video::class);
    }

    public function hasVideo($id)
    {
        return in_array($id, $this->videos->pluck('id')->toArray());
    }

    public function author()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }

    public function industries()
    {
        return $this->belongsToMany(\App\Industry::class);
    }

    public function hasIndustry($id)
    {
        return in_array($id, $this->industries->pluck('id')->toArray());
    }

    public function questions()
    {
        return $this->belongsToMany(\App\Question::class);
    }

    public function hasQuestion($id)
    {
        return in_array($id, $this->industries->pluck('id')->toArray());
    }

    public function guides()
    {
        return $this->belongsToMany(\App\Guide::class);
    }

    public function hasGuide($id)
    {
        return in_array($id, $this->guides->pluck('id')->toArray());
    }

    public function phases()
    {
        return $this->belongsToMany(\App\Phase::class);
    }

    public function hasPhase($id)
    {
        return in_array($id, $this->phases->pluck('id')->toArray());
    }
}