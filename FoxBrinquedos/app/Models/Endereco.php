<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    
    protected $table = 'ENDERECO';
    protected $primaryKey = 'ENDERECO_ID';

    public function user()
    {
        return $this->belongsTo(User::class, 'USUARIO_ID', 'USUARIO_ID');
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'ENDERECO_ID', 'ENDERECO_ID');
    }
}
