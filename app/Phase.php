<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phase extends Model
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
        'color',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];


    public function questions()
    {
        return $this->belongsToMany(\App\Question::class);
    }
}
