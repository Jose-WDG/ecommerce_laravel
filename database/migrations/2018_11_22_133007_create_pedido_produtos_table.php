<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('status', ['RE', 'PA','CA']);//reservado, pago, cancelado
            $table->decimal('valor', 8, 2)->default(0);
            $table->decimal('desconto', 8, 2)->default(0);
            $table->timestamps();
        });
    }

    /** "
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_produtos');
    }
}
