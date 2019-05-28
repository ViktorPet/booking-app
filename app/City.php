<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function hotel(){

        return $this->hasOne('App\Hotel');
    }
}
