<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use SoftDeletes;    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question',
        'description',
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

    public function taxonomies()
    {
        return $this->belongsToMany(\App\Taxonomy::class);
    }

    public function phases()
    {
        return $this->belongsToMany(\App\Phase::class);
    }

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where( 'question', 'like', '%' . $query . '%' )                    
                    ->orWhere( 'description', 'like', '%' . $query . '%');
    }
}
