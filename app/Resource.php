<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use SearchableTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'icon',
        'image',
        'affiliate_url',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];


    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function tools()
    {
        return $this->belongsToMany(\App\Tool::class);
    }
}
