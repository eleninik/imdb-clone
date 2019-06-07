<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use SoftDeletes;
    use Searchable;

    protected $dates = ['deleted_at'];
    
    protected $table = 'movies';

    protected $morphClass = 'movie';


    protected $fillable = [
        'title', 
        'year', 
        'age_rating_id', 
        'released',
        'runtime',
        'short_plot',
        'full_plot',
        'production_country_id',
        'poster',
        'backdrop',
        'studio_id',
        'trailer'
    ];

    public function genres()
    {
        return $this->hasManyThrough(
            'App\Genre', 
            'App\GenreMoviesSeries',
            'movie_id',
            'id',
            'id',
            'genre_id'
        );
    }

    public function rating()
    {
        return $this->morphMany('\App\Rating', 'rateable');
    }

    public function comment()
    {
        return $this->morphMany('\App\Comment', 'commentable');
    }

    public function reviews()
    {
      return $this->morphMany('App\Review', 'reviewable_id', 'id');
    }


    public function productionCountries()
    {
        return $this->hasManyThrough(
            'App\ProductionCountry', 
            'App\MovieSeriesProductionCountries',
            'movie_id',
            'id',
            'id',
            'production_country_id'
        );
    }

    public function people()
    {
        return $this->hasManyThrough(
            'App\People',
            'App\PeopleProfession',
            'cast_id',
            'id',
            'id',
            'people_id'
        );
    }

    public function studios()
    {
        return $this->hasManyThrough(
            'App\Studio',
            'App\MovieStudioSeries',
            'movie_id',
            'id',
            'id',
            'studio_id'
        );
    }

    public function featured()
    {
        return $this->hasManyThrough(
            'App\Featured',
            'App\FeaturedMoviesSeries',
            'movie_id',
            'id',
            'id',
            'featured_id'
        );     
    }

    public function watchlist()
    {
        return $this->belongsToMany('App\Movie', 'id', 'item_id');
    }
}

