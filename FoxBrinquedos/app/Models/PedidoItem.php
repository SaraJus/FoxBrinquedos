<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoItem extends Model
{
    use HasFactory;

    protected $table = "PEDIDO_ITEM";

    public function produto()
    {
        return $this->belongsTo('App\Produto');
    }

    public function pedido()
    {
        return $this->belongsTo('App\Pedido');
    }
}
