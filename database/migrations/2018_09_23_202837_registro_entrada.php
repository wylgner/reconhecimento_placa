<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegistroEntrada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('registro_entradas', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('data_entrada');
            $table->unsignedInteger('veiculo_id');
            $table->timestamps();
            $table->foreign('veiculo_id')
      ->references('id')->on('veiculos')
      ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('registro_entradas');    

     }
}
