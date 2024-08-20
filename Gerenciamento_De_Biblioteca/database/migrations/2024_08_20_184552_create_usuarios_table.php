<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('livro_id')->nullable()->constrained('livros');
            $table->string('nome_usuario');
            $table->string('email_usuario')->unique();
            $table->string('senha_usuario');
            $table->string('livro_alugado')->nullable();
            $table->enum('tipo', ['bibliotecario', 'usuario']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
