<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class People extends Model
{
    use Searchable;

    protected $fillable = [
        'firstname',
        'lastname',
        'born',
        'bio',
        'photo',
        'awards'
    ];


    public function profession()
    {
        return $this->hasManyThrough(
            'App\Profession', 
            'App\PeopleProfession',
            'people_id',
            'id',
            'id',
            'profession_id'
        );    
    }

    public function movies()
    {
        return $this->hasManyThrough(
            'App\Movie',
            'App\PeopleProfession', 
            'people_id',
            'id',
            'id', 
            'cast_id'
        );
    }

}
