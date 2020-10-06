<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    public function sites(){
        return $this->hasMany('App\Site');
    }

    public function asp(){
        return $this->belongsTo('App\Asp');
    }
}
