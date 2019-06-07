<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Featured extends Model
{

    protected $fillable = [
        'name'
    ];

    protected $table = 'featured';

    public function movies()
    {
        return $this->belongsToMany('App\Movie', 'featured_movies_series', 'featured_id', 'movie_id');
    }
    
    public function series()
    {
        return $this->belongsToMany('App\Series', 'featured_movies_series', 'featured_id', 'series_id');
    }

}
