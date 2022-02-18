<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';

    protected $fillable = [
        'cliente_id'
    ];

    public function produtos() {
        return $this->belongsToMany(
            'App\Produto', 
            'pedido_produtos', 
            'pedido_id', 
            'produto_id'
        )->withPivot([
            'created_at',
            'updated_at', 
            'quantidade',
            'id'
        ]);
    }
}
