<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieStudioSeries extends Model
{
    protected $fillable = [
        'movie_id',
        'studio_id',
        'series_id'
    ];
    protected $table = 'movie_studio_series';

    public function movies()
    {
        return $this->belongsTo('App\Movie', 'movie_id', 'id');
    }

    public function studios()
    {
        return $this->belongsTo('App\Studio', 'studio_id', 'id');
    }

    public function series()
    {
        return $this->belongsTo('App\Series', 'series_id', 'id');
    }
}