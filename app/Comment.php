<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
    'movie' => 'App\Movie',
    'series' => 'App\Series',
    'episode' => 'App\Episode'
]);

class Comment extends Model
{
    protected $fillable = [
        'user_id',
        'user_name',
        'review_id',
        'body'
    ];

    protected $entity_types = [
        'movie' => \App\Movie::class,
        'series' => \App\Series::class,
        'episode' => \App\Episode::class
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function review()
    {
        return $this->belongsTo('App\Review', 'id', 'review_id');
    }
}
