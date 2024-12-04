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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pacientes');
            $table->unsignedBigInteger('id_medicos');
            $table->unsignedBigInteger('id_servicios');
            $table->foreign('id_pacientes')->references('id')->on('users');
            $table->foreign('id_medicos')->references('id')->on('medicos');
            $table->date('fecha')->nullable();
            $table->foreign('id_servicios')->references('id')->on('servicios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
