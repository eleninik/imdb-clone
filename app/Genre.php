<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Genre extends Model
{
    use Searchable;

    protected $fillable = [
        'name'
    ];

    protected $table = 'genres';


    public function movies()
    {
        return $this->belongsToMany('App\Movie', 'genre_movie_series', 'genre_id', 'movie_id');
    }
    
    public function series()
    {
        return $this->belongsToMany('App\Series', 'genre_movie_series', 'genre_id', 'series_id');
    }

}
