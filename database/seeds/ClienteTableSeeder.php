<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BancoTableSeeder extends Seeder
{
	  public function run()
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
        	 'nome'=>"Jacinto Cabingano",
             'bi'=>"113828630LA035",
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