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
        Schema::create('session_tutorias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tutor_id')->constrained('usuarios')->onDelete('cascade');
            $table->foreignId('estudiante_id')->constrained('usuarios')->onDelete('cascade');
            $table->string('materia');
            $table->date('fecha');
            $table->time('hora');
            $table->enum('estado', ['pendiente', 'completada']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_tutorias');
    }
};
