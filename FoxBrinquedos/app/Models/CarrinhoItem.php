<?php

namespace App\Models;

use App\Traits\HasCompositePrimaryKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrinhoItem extends Model
{
    use HasFactory;
    use HasCompositePrimaryKey;

    protected $table = 'CARRINHO_ITEM';

    protected $primaryKey = ['USUARIO_ID', 'PRODUTO_ID']; // Define chave composta
    public $incrementing = false; // Desativa incremento automático
    public $timestamps = false;

    protected $fillable = ['USUARIO_ID', 'PRODUTO_ID', 'ITEM_QTD'];

    public function user()
    {
        return $this->belongsTo(User::class, 'USUARIO_ID');
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'PRODUTO_ID');
    }

    public function getKeyName()
    {
        return ['USUARIO_ID', 'PRODUTO_ID'];
    }

    public function getKeyType()
    {
        return 'array';
    }
}