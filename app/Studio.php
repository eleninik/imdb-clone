<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Studio extends Model
{
    use Searchable;

    protected $fillable = ['name'];

    

    public function movies()
    {
        return $this->belongsToMany('App\Movie', 'movie_studio_series', 'studio_id', 'movie_id');
    }

    public function series()
    {
        return $this->belongsToMany('App\Series', 'movie_studio_series', 'studio_id', 'series_id');
    }

}
