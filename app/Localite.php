<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localite extends Model
{
    public function region(){
        return $this->belongsTo('App\Region');
    }

    public function sites(){
        return $this->hasMany('App\Site');
    }
}
