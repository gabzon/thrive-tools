<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attitude extends Model
{
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


    public function tools()
    {
        return $this->belongsToMany(\App\Tool::class);
    }

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where( 'name', 'like', '%' . $query . '%' )
                    ->orWhere( 'description', 'like', '%' . $query . '%')
                    ->orWhere( 'icon', 'like', '%' . $query . '%' );
    }
}
