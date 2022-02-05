<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    //

    public function lga()
    {
        return $this->belongsTo(Lga::class);
    }

    public function citizen()
    {
        return $this->hasMany(Citizen::class);
    }
}
