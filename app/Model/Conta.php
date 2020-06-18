<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Conta extends Model
{
  protected $table = 'contas';
    // fillable
    protected $fillable = [
                            'valor',
                            'numero',
                            'iban',
                            'cliente_id',
                            'banco_id'];

 }

   
