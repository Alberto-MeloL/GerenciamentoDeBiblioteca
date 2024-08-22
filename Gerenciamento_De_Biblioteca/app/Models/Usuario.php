<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nome_usuario', 'email_usuario', 'senha_usuario', 'tipo',
    ];

    protected $hidden = [
        'senha_usuario', 'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->senha_usuario;
    }
}
