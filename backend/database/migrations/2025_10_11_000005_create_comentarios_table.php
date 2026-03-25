<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lugar_id')->nullable()->constrained('lugares')->onDelete('cascade');
            $table->foreignId('usuario_id')->nullable()->constrained('usuarios')->onDelete('cascade');
            $table->text('contenido')->nullable();
            $table->decimal('rating', 3, 1)->nullable();
            $table->string('image_path')->nullable();
            $table->string('category')->nullable();
            $table->foreignId('hospedaje_id')->nullable()->constrained('hospedajes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};






