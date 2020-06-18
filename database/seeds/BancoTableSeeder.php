<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BancoTableSeeder extends Seeder
{
	  public function run()
    {
        DB::table('bancos')->insert([
        	'nome'=>'Banco de Fomento de Angola',
        	'sigla'=>'BFA',
            'codigo'=>'0006',
            'contactos'=>'932445566',    
            'created_at' => Carbon::now(),
        ]);
         DB::table('bancos')->insert([
        	'nome'=>'Banco Popular Comercial',
        	'sigla'=>'BPC',
            'codigo'=>'0010',
            'contactos'=>'923221111',    
            'created_at' => Carbon::now(),
        ]);
          
        
          DB::table('bancos')->insert([
        	'nome'=>'Atlantico',
        	'sigla'=>'Atlantico',
            'codigo'=>'0009',
            'contactos'=>'93421166',    
            'created_at' => Carbon::now(),
        ]);
    }

}