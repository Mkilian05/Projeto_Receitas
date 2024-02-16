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
        /**Criação da tabela receita e de seus atributos*/
        Schema::create('receitas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->longText('ingredientes');
            $table->string('categoria');
            $table->longText('modo_de_preparo');
            $table->string('slug');
            $table->string('img_card');
            $table->string('img_receita');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receitas');
    }
};
