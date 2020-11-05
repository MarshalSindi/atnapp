<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    public function field(){
        return $this->belongsTo('App\Field');
    }

    public function typeSite(){
        return $this->belongsTo('App\Type_site');
    }

    public function Structure(){
        return $this->belongsTo('App\Structure');
    }

    public function localite(){
        return $this->belongsTo('App\Localite');
    }

    public function groupeElectrogene(){
        return $this->belongToMany('App\Groupe_electrogene');
    }

    public function relevers(){
        return $this->hasMany('App\Relever');
    }

    public function livraisons(){
        return $this->hasMany('App\Livraison');
    }

    public function controles(){
        return $this->hasMany('App\Controle');
    }
}
