<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    public function donors()
    {
        return $this->hasOne('App\donors');
    }
}
