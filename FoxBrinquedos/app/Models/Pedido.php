<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'PEDIDO';
    protected $primaryKey = 'PEDIDO_ID';
    public $timestamps = false;

    protected $fillable = ['USUARIO_ID', 'ENDERECO_ID', 'STATUS_ID', 'PEDIDO_DATA'];

    public function itens()
    {
        return $this->hasMany(PedidoItem::class, 'PEDIDO_ID', 'PEDIDO_ID');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'STATUS_ID', 'STATUS_ID');
    }
}