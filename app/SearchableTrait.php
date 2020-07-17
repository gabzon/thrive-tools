<?php

namespace App;

trait SearchableTrait
{
    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where( 'name', 'like', '%' . $query . '%' )                    
                    ->orWhere( 'description', 'like', '%' . $query . '%')
                    ->orWhere( 'icon', 'like', '%' . $query . '%' );
    }
}
