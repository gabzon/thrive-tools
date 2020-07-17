<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use SearchableTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'version',
        'author',
        'type',
        'lang',
        'file',
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

    public function tool()
    {
        return $this->belongsTo(\App\Tool::class);
    }
}
