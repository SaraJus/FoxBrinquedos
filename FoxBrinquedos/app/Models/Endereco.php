<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    
    protected $table = 'ENDERECO';
    protected $primaryKey = 'ENDERECO_ID';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'USUARIO_ID',
        'ENDERECO_LOGRADOURO',
        'ENDERECO_NOME',
        'ENDERECO_NUMERO',
        'ENDERECO_COMPLEMENTO',
        'ENDERECO_CEP',
        'ENDERECO_CIDADE',
        'ENDERECO_ESTADO'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'USUARIO_ID', 'USUARIO_ID');
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'ENDERECO_ID', 'ENDERECO_ID');
    }
}