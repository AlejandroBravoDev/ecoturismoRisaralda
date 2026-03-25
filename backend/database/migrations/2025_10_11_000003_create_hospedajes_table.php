<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hospedajes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('ubicacion')->nullable();
            $table->text('descripcion')->nullable();
            $table->text('comentarios')->nullable();
            $table->json('imagenes')->nullable();
            $table->foreignId('municipio_id')->nullable()->constrained('municipios')->onDelete('cascade');
            $table->json('lugares')->nullable();
            $table->timestamps();
            $table->string('coordenadas')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hospedajes');
    }
};