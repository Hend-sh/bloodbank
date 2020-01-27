<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donors extends Model
{
    //
    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function City()
    {
        return $this->belongsTo('App\City');
    }
    
    public function Nationality()
    {
        return $this->hasOne('App\Nationality');
    }
    
}
