<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    public function Blood()
    {
        return $this->hasOne('App\Blood');

    }
}
