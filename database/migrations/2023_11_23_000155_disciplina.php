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
        Schema::create('disciplinas', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("data_inicio");
            $table->string("data_fim");
            $table->integer("carga_horaria");

            $table->unsignedBigInteger('professor_id');
            $table->foreign('professor_id')->references('id')->on('professores');

            $table->unsignedBigInteger('estudante_id');
            $table->foreign('estudante_id')->references('id')->on('estudantes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // 
    }
};
