<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Writer extends Model
{
    use Searchable;

    public function people()
    {
        return $this->belongsTo('App\People');
    }
}
