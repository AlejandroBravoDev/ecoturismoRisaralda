<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('municipios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('clima')->nullable();
            $table->json('lugares')->nullable();
            $table->json('hospedajes')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('municipios');
    }
};






