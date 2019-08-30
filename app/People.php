<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    //
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
}
