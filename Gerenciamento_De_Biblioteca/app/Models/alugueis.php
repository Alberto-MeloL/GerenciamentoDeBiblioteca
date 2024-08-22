<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluguel extends Model
{
    use HasFactory;

    protected $table = 'alugueis';

    protected $fillable = [
        'usuario_id',
        'livro_id',
    ];

    // Relacionamento com Usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    // Relacionamento com Livro
    public function livro()
    {
        return $this->belongsTo(Livro::class);
    }
}
