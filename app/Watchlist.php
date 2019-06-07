<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{

    protected $fillable = [
        'user_id',
        'item_id',
        'type',
        'watched'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function movies()
    {
        return $this->hasMany('App\Movie', 'id', 'item_id');
    }

    public function series()
    {
        return $this->hasMany('App\Series', 'id', 'item_id');
    }

    public function rating()
    {
        return $this->hasMany('App\Rating', 'rateable_id', 'item_id', 'type', 'type');
    }

    public function review()
    {
        return $this->hasMany('App\Review', 'reviewable_id', 'item_id', 'type', 'type');
    }
}
