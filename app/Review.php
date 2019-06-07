<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
    'movie' => 'App\Movie',
    'series' => 'App\Series'
]);

class Review extends Model
{
    protected $fillable = [
        'user_id',
        'user_name',
        'title',
        'body',
        'status',
        'reviewable_id',
        'reviewable_type',
    ];

    protected $reviewable_type = [
        'movie' => \App\Movie::class,
        'series' => \App\Series::class
    ];

    public function reviewable()
    {
      return $this->morphTo();
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function rating()
    {
        return $this->belongsTo('App\Rating', 'user_id', 'user_id', 'reviewable_id', 'rateable_id', 'reviewable_type', 'rateable_type');
    }

    public function movie()
    {
        return $this->belongsTo('App\Movie', 'reviewable_id', 'id');
    }

    public function series()
    {
        return $this->belongsTo('App\Series', 'reviewable_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'review_id', 'id');
    }
}
