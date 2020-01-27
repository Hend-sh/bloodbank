<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    //
    public function city()
    {
        return $this->hasOne('App\city');        
    }
}
