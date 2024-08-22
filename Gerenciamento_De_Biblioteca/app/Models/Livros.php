<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $table = 'livros';

    protected $fillable = [
        'nome_livro',
        'status',
    ];

    // Relacionamento com Usuário através da tabela de aluguéis
    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'alugueis')->withTimestamps();
    }
}
