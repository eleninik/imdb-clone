<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Episode extends Model
{
    use Searchable;

    use SoftDeletes; 

    protected $morphClass = 'episode';


    protected $fillable = [
        'season_id',
        'title',
        'released',
        'plot',
        'runtime',
        'episode_number'
    ];

    public function season()
    {
        return $this->belongsTo('App\Season');
    }

}
