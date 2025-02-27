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
        Schema::create('rescates', function (Blueprint $table) {
            $table->id();
            $table->foreignId("viajes_id");
            $table->datetime("fecha_hora_inicio");
            $table->datetime("fecha_hora_fin");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rescates');
    }
};
