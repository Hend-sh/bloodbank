<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    public function donors()
    {
        return $this->hasMany('App\donors');
    }
    public function patient()
    {
        return $this->hasMany('App\patients');
    }
}
