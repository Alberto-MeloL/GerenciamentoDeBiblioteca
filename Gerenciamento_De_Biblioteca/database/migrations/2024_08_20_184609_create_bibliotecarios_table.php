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
        Schema::create('bibliotecarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome_bibliotecario');
            $table->string('email_bibliotecario');
            $table->string('senha_bibliotecario', 60);
            $table->enum('tipo', ['bibliotecario', 'usuario']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bibliotecarios');
    }
};
