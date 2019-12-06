<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function empresas(){
        return $this->hasMany('App\Empresa');
    }
}
