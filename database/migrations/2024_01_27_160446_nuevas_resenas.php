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
        // Schema::table('resenas', function (Blueprint $table) {
        //     $table->string('email');
        //     $table->integer('calidadPrecio');
        //     $table->integer('tratoPersonal');
        //     $table->integer('ubicacion');
        //     $table->integer('instalacionServicios');
        //     $table->integer('limpieza');
        //     $table->string('comentario');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('resenas', function (Blueprint $table) {
        //     $table->dropColumn('estrellas');
        //     $table->dropColumn('resena');
        // });
    }
};
