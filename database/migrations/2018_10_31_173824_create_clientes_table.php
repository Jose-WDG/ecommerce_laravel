<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id_cliente');
            $table->string('nome');
            $table->string('tipoDePessoa');
            $table->string('e-mail');
            $table->string('cpf');
            $table->string('dataDeNascimento');
            $table->string('celular');
            $table->string('outroTelefone');
            $table->string('genero');
            $table->string('senha');
            $table->string('senhaConfirme');
            $table->dateTimeTz('CriadaEm');	
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
        Schema::dropIfExists('clientes');
    }
}
