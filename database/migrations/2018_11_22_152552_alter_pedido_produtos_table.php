<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPedidoProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pedido_produtos', function (Blueprint $table) {
            
            $table->integer('pedido_id')->unsigned();
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            
            $table->integer('produto_id')->unsigned();
            $table->foreign('produto_id')->references('id')->on('produtos');

            $table->integer('cupom_desconto_id')->unsigned()->nullable();
            $table->foreign('cupom_desconto_id')->references('id')->on('cupom_descontos');
        });
    }

    /**
     * Reverse the migrations.
     *"
     * @return void
     */
    public function down()
    {
        Schema::table('pedido_produtos', function (Blueprint $table) {
            $table->dropForeign('pedido_id');
            $table->dropColumn('pedido_id');

            $table->dropForeign('produto_id');
            $table->dropColumn('produto_id');

            $table->dropForeign('cupom_desconto_id');
            $table->dropColumn('cupom_desconto_id');
        });
    }
}
