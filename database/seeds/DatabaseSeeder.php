<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
            $this->Banco();
            $this->Cliente();
            $this->Conta();
            
        
    }

     public function Banco()
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
     public function Cliente()
    {
        DB::table('clientes')->insert([
             'nome'=>"Daniel Cunha",
             'bi'=>"003828630LA035",
             'genero'=>"Masculino",    
            'created_at' => Carbon::now(),
        ]);
         DB::table('clientes')->insert([
             'nome'=>"António Cabingano",
             'bi'=>"103828630LA035",
             'genero'=>"Masculino",    
            'created_at' => Carbon::now(),
        ]);
          
       DB::table('clientes')->insert([
             'nome'=>"KIXIKILA PLUS",
             'bi'=>"013828630LA035",
             'genero'=>"Masculino",    
            'created_at' => Carbon::now(),
        ]);
       
  }
   public function conta()
    {

    DB::table('contas')->insert([
        'valor'=>30,
        'numero'=>1234567,
        'iban'=>00061234567,
        'cliente_id'=>1,
        'banco_id'=>1,    
        'created_at' => Carbon::now(),
        ]);
    DB::table('contas')->insert([
        'valor'=>908,
        'numero'=>7654321,
        'iban'=>00105644567,
        'cliente_id'=>2,
        'banco_id'=>2,    
        'created_at' => Carbon::now(),
        ]);


       DB::table('contas')->insert([
        'valor'=>79000,
        'numero'=>5644334,
        'iban'=>00065644334,
        'cliente_id'=>3,
        'banco_id'=>1,    
        'created_at' => Carbon::now(),
        ]);
    
      

}

}
