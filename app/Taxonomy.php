<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxonomy extends Model
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
        'image',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where( 'name', 'like', '%' . $query . '%' )
                    ->orWhere( 'description', 'like', '%' . $query . '%')
                    ->orWhere( 'icon', 'like', '%' . $query . '%' );
    }
}
