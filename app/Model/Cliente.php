<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Cliente extends Model
{
  protected $table = 'clientes';
    // fillable
    protected $fillable = [
        'nome',
        'bi',
        'genero'];

   

}