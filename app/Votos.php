<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Votos extends Model
{
  protected $primaryKey = 'idVoto';
  protected $table = 'votos';
  protected $fillable = ['users_id','projeto_idProjeto','quantidade'];
}
