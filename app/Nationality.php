<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    //
    public function donors()
    {
        return $this->hasOne('App\donors');
    }
}
