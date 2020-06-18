<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('valor');
            $table->integer('numero');
            $table->string('iban');
            $table->bigInteger('cliente_id')->unsigned();

            $table->foreign('cliente_id')
                    ->references('id')
                    ->on('clientes');
            $table->bigInteger('banco_id')->unsigned();

            $table->foreign('banco_id')
                    ->references('id')
                    ->on('bancos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contas');
    }
}
