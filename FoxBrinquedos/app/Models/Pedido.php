<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = "PEDIDO";

    public function itens()
    {
        return $this->hasMany('App\PedidoItem');
    }

    public function usuario()
    {
        return $this->belongsTo('App\Usuario');
    }
}
