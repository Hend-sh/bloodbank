<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blood extends Model
{
    //
    public function BloodType()
    {
        return $this->hasOne('App\BloodType');

    }
}
