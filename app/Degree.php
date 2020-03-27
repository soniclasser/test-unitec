<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    public function interestLevels()
    {
        return $this->hasMany('App\InterestLevel');
    }
}
