<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieSeriesProductionCountries extends Model
{
    protected $table  = 'movie_series_production_countries';

    protected $fillable = [
        'movie_id',
        'production_country_id',
        'series_id'
    ];

    public function movies()
    {
        return $this->belongsTo('App\Movie', 'movie_id', 'id');
    }

    public function productionCountries()
    {
        return $this->belongsTo('App\ProductionCountry', 'production_country_id', 'id');
    }


    public function series()
    {
        return $this->belongsTo('App\Series', 'series_id', 'id');
    }
}
