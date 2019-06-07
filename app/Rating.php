<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
    'movie' => 'App\Movie',
    'series' => 'App\Series'
]);


class Rating extends Model
{
    protected $fillable = [
        'user_id',
        'rating',
        'rateable_id',
        'rateable_type',
    ];

    protected $rateable_type = [
        'movie' => \App\Movie::class,
        'series' => \App\Series::class
    ];

    public function rateable()
    {
      return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id', 'user_id');
    }

    public function movie()
    {
        return $this->morphMany('App\Movie', 'rateable');
    }

    public function series()
    {
        return $this->morphMany('App\Series', 'rateable');
    }

    public function review()
    {
        return $this->belongsTo('App\Review', 'user_id', 'user_id', 'rateable_id', 'reviewable_id', 'rateable_type', 'reviewable_type');
    }


}
