<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asp extends Model
{
    public function fields(){
        return $this->hasMany('App\Field');
    }
}
