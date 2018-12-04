<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido_produto extends Model
{
    protected $fillable = [
        'pedido_id',
        'produto_id',
        'status',
        'valor'
    ]; 
        /**
         * metodo da relação
         *
         * @return void
         */
        public function produto()
        {
            return $this->belongsTo('App\produto','produto_id','id');
        }
        
    
}
