<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $messages = [
        'required' => 'O :attribute deve estar preenchido!',
        'min'      => 'O :attribute precisa ter no miníno :min caracteres!',
        'max'      => 'O :attribute precisa ter no máximo :max caracteres!',
        'unique'   => 'O :attribute já existe nos nossos registos!',
        'integer'  => 'O :attribute precisa ser um inteiro!',
        'double'   => 'O :attribute precisa ser do tipo double!',
        'email'    => 'Por favor preencha um email válido!',
        'date'     => 'Por favor insira uma data válida!'
    ];
}
