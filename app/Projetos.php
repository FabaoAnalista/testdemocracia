<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projetos extends Model
{
    protected $fillable = ['titulo', 'subTitulo','descriçao','status','metaVotos'];

//    public function entradas() {
//      return $this->hasMany('App\Entrada');
//    }

}
