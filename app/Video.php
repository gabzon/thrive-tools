<?php

namespace App;
// use MediaEmbed\MediaEmbed;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use SearchableTrait;
    // public $MediaEmbed;
    // public $vid;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'url',
        'embed',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    // public function getVideoHtmlAttribute()
    // {
        
    //     $this->MediaEmbed = new MediaEmbed();
    //     // dd($this->url);
    //     $MediaObject = $this->MediaEmbed->parseUrl($this->url);
    //     if ($MediaObject) {
    //         $this->vid = $MediaObject->id();
    //         $host = $MediaObject->slug();
    //     }
    //     dd($this->vid);
    //     return $MediaObject->getEmbedCode();        
    // }


    public function tool()
    {
        return $this->belongsTo(\App\Tool::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}

