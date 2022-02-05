<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    //

    protected $fillable=['name', 'gender', 'address', 'phone', 'ward_id'];

    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }
}
