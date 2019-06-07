<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenreMoviesSeries extends Model
{
    
    protected $table  = 'genre_movie_series';

    protected $fillable = [
        'genre_id',
        'movie_id',
        'series_id'
    ];

    public function genres()
    {
        return $this->belongsTo('App\Genre', 'genre_id', 'id');
    }

    public function movies()
    {
        return $this->belongsTo('App\Movie', 'movie_id', 'id');
    }

    public function series()
    {
        return $this->belongsTo('App\Series', 'series_id', 'id');
    }

    
}
