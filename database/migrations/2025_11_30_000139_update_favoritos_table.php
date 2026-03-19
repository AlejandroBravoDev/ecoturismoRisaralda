<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema; 

return new class extends Migration
{
    public function up()
{
    Schema::table('favoritos', function (Blueprint $table) {
        $table->string('lugar_id')->nullable()->change();
    });
}

    public function down(): void
    {
        // Nothing to revert
    }
};