<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Series extends Model
{

    use Searchable;
    use SoftDeletes; 

    use Searchable;  
    protected $morphClass = 'series';  


    protected $fillable = [
        'title', 
        'year', 
        'age_rating_id', 
        'plot',
        'production_country_id',
        'poster',
        'backdrop',
        'studio_id'
    ];

    public function rating()
    {
        return $this->morphMany('\App\Rating', 'rateable');
    }

    public function reviews()
    {
      return $this->morphMany('App\Review', 'reviewable');
    }
    
    public function seasons()
    {
        return $this->hasMany('App\Season');
    }

    public function episodes()
    {
        return $this->hasManyThrough(
            'App\Episode', 
            'App\Season',
            'series_id',
            'season_id',
            'id',
            'id' 
        
        );
    }

    public function genres()
    {
        return $this->hasManyThrough(
            'App\Genre', 
            'App\GenreMoviesSeries',
            'series_id',
            'id',
            'id',
            'genre_id'
        );
    }


    public function productionCountries()
    {
        return $this->hasManyThrough(
            'App\ProductionCountry', 
            'App\MovieSeriesProductionCountries',
            'series_id',
            'id',
            'id',
            'production_country_id'
        );
    }

    public function studios()
    {
        return $this->hasManyThrough(
            'App\Studio',
            'App\MovieStudioSeries',
            'series_id',
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
            'series_id',
            'id',
            'id',
            'featured_id'
        );    
    }
}
