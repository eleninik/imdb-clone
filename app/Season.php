<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Season extends Model
{
    use Searchable;

    use SoftDeletes; 

    protected $morphClass = 'season';

    
    protected $fillable = [
        'series_id',
        'season_number'
    ];

    
    public function series()
    {
        return $this->belongsTo('App\Series');
    }

    public function episodes()
    {
        return $this->hasMany('App\Episode');
    }

}
