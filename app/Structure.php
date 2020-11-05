<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    public function sites(){
        return $this->hasMany('App\Site');
    }
}
