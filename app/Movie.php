<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies_api';

    public static function search($term) {
        return self::where('title', 'LIKE', '%' . $term . '%');
    }
}
