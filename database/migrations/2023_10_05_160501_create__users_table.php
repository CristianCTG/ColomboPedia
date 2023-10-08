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
        Schema::create('_users', function (Blueprint $table) {
            $table->id();
            $table ->string('cedula');
            $table ->string('nombre');
            $table ->string('apellido');
            $table ->string('email');
            $table ->string('tipo')->default('Estudiante');
            $table ->string('estado')->default('Activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_users');
    }
};
