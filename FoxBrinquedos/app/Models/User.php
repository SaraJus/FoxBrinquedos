<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = "USUARIO";
    protected $primaryKey = "USUARIO_ID";
    public $timestamps = false;

    protected $fillable = [
        'USUARIO_NOME',
        'USUARIO_EMAIL',
        'USUARIO_SENHA',
        'USUARIO_CPF'
    ];

    protected $hidden = [
        'USUARIO_SENHA',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function itensCarrinho()
    {
        return $this->hasMany('App\CarrinhoItem');
    }

    public function pedidos()
    {
        return $this->hasMany('App\Pedido');
    }
}
