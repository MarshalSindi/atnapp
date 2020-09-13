<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_site extends Model
{
    public function sites(){
        return $this->hasMany('App\Site');
    }
}
