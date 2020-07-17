<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    use SearchableTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'author',
        'title',
        'location',
        'publisher',
        'year',
        'isbn10',
        'isbn13',
        'url',
        'chapter_title',
        'pages',
        'affiliate_link',
        'image',
        'visited_on',
        'number',
        'volume',
        'edition',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];


    public function tools()
    {
        return $this->belongsToMany(\App\Tool::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
