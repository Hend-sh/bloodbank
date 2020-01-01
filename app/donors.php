<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donors extends Model
{
    //
    public function User()
    {
        return $this->hasOne('App\User');
    }

    public function City()
    {
        return $this->hasOne('App\City');
    }
    
    public function Nationality()
    {
        return $this->hasOne('App\Nationality');
    }
    
}
