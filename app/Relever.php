<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relever extends Model
{
    public function site(){
        return $this->belongsTo('App\Site');
    }
}
