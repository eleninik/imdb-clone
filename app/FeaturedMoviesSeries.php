<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeaturedMoviesSeries extends Model
{
    protected $fillable = [
        'featured_id',
        'movie_id',
        'series_id'
    ];
    protected $table = 'featured_movies_series';

    public function featured()
    {
        return $this->belongsTo('App\Featured', 'featured_id', 'id');
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