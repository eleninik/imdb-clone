<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeopleProfession extends Model
{
    protected $fillable = [
        'people_id',
        'cast_id',
        'cast_type',
        'profession_id',
        'role'
    ];

    public function people()
    {
        return $this->hasMany('App\People', 'id', 'people_id');
    }

    public function movies()
    {
        return $this->hasMany('App\Movie', 'id', 'cast_id');
    }

    public function series()
    {
        return $this->hasMany('App\Series', 'id', 'cast_id');
    }

    public function profession()
    {
        return $this->belongsTo('App\Profession', 'profession_id', 'id');
    }

}