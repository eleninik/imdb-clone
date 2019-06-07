<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class ProductionCountry extends Model
{
    use Searchable;
    
    protected $fillable = [
        'country_name',
        'continent'
    ];

    protected $table = 'production_countries';

    
    public function movies()
    {
        return $this->belongsToMany('App\Movie', 'movie_series_production_countries', 'production_country_id', 'movie_id');
    }

    public function series()
    {
        return $this->belongsToMany('App\Series', 'movie_series_production_countries', 'production_country_id', 'series_id');
    }
}
