<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BancoTableSeeder extends Seeder
{
	  public function run()
    {

    DB::table('clientes')->insert([
        'saldo'=>30000,
        'numero'=>"1234567",
        'iban'=>"00061234567",
        'cliente_id'=>1,
        'banco_id'=>1,    
            'created_at' => Carbon::now(),
        ]);
    DB::table('clientes')->insert([
        'saldo'=>908000,
        'numero'=>"7654321",
        'iban'=>"00065644567",
        'cliente_id'=>2,
        'banco_id'=>2,    
        'created_at' => Carbon::now(),
        ]);
      DB::table('clientes')->insert([
        'saldo'=>908000,
        'numero'=>"5644334",
        'iban'=>"1237645",
        'cliente_id'=>3,
        'banco_id'=>3,    
        'created_at' => Carbon::now(),
        ]);
       DB::table('clientes')->insert([
        'saldo'=>790000,
        'numero'=>"5644334",
        'iban'=>"1237645",
        'cliente_id'=>4,
        'banco_id'=>1,    
        'created_at' => Carbon::now(),
        ]);



}