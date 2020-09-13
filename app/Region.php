<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function localites(){
        return $this->hasMany('App\Localite');
    }
}
