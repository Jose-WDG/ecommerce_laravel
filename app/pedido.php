<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{   
    // Campos obrigatório para inserir um
    protected $fillable = [
        'user_id',
        'status'
    ]; 
     /**
         * metodo da relação
         *
         * @return void
         */
        public function pedido_produtos()
        {
            return $this->hasMany('App\pedido_produto')
            ->select(\DB::raw('produto_id, sum(desconto) as descontos, sum(valor) as valores, count(1) as qtd'))
            ->groupBy('produto_id')
            ->orderBy('produto_id','desc');
        }

        public static function consultaId($where)
        {   
            $pedido = self::where($where)->first(['id']);
            return !empty($pedido->id) ?  $pedido->id :null;
        }
}
