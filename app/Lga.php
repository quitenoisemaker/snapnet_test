<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    //

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function ward()
    {
        return $this->hasMany(Ward::class);
    }

    public function citizen()
    {
        return $this->hasManyThrough('App\Citizen', 'App\Ward');
    }
}
