<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Model\Conta;
use App\Model\Banco;
use App\Model\Cliente;


class ControllerConta extends Controller
{

 

	public function storeConta(Request $request)
	{
		 $validation = Validator::make($request->all(), [
            'nome'     => 'required',
            'bi'  =>      'required|min:13|max:13|unique:clientes',
            'genero' =>   'required',
            'banco' =>    'required',
            
            
        ], $this->messages);
		
        
        if ($validation->fails()) {
            Log::critical('Há erros de validação nos dados fornecidos!');

            return response()->json(
                $validation->errors()
            );
        }

        $banco = Banco::Where('codigo',$request->input('banco'))->get()->first();
        $conta = Conta::Where('banco_id',$banco->id)->max('numero');
        $numeroConta = $conta+10;
        $iban = $banco->codigo .''. $numeroConta;
      
         $dadosCliente = ['nome'=>$request->input('nome'),'bi'=>$request->input('nome'),'genero'=>$request->input('genero')];
        $cliente= Cliente::create($dadosCliente);

		$dadosConta = ['valor'=>0,'numero'=>$numeroConta,'iban'=>$iban,'cliente_id'=>$cliente->id,'banco_id'=>$banco->id];
		$conta = Conta::create($dadosConta);

		if($conta){
			  return response()->json([
                'status'  => 400,
                'message' => "Conta Criada Com sucesso" ,
                'data'=>$conta
            ], 400);
		}

		 return response()->json([
                'status'  => 400,
                'message' => "Ero ao Criar Conta" 
            ], 400);


	}

	public function deposito($ibanOrigem,$ibanDestino,$valor)
	{
		$contaOrigem = Conta::where('iban',$ibanOrigem)->get()->first();
		$contaDestino = Conta::where('iban',$ibanDestino)->get()->first();
		if($contaOrigem==null){
			return response()->json([
                'status'  => 400,
                'message' => "A conta Não Existe" ,
                'data' => $contaOrigem
            ], 400);

		}elseif($contaDestino==null)
		{
			return response()->json([
                'status'  => 400,
                'message' => "A conta Não Existe" ,
                'data' => $contaDestino
            ], 400);

		}
      

		if($valor<$contaOrigem->valor){
            
			$depositar = $contaDestino->valor+$valor;
			$debitar = $contaOrigem->valor-$valor;

			 \DB::table('contas')
                ->where('id', $contaOrigem->id)
                ->update(['valor' =>$debitar]);

               \DB::table('contas')
                ->where('id', $contaDestino->id)
                ->update(['valor' =>$depositar]);
                
                return response()->json([
                'status'  => 400,
                'message' => "Deposito feito com Sucesso",
                'data' => $depositar 
            ], 400);
		}

        
	}

	

	

}