<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrinhoItem extends Model
{
    use HasFactory;

    protected $table = "CARRINHO_ITEM";

    public function produto()
    {
        return $this->belongsTo('App\Produto');
    }

    public function usuario()
    {
        return $this->belongsTo('App\Usuario');
    }
}
