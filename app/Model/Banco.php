<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Banco extends Model
{
  protected $table = 'bancos';
    // fillable
    protected $fillable = [
        'nome',
        'sigla',
        'codigo',
        'contactos'
    ];

   

}