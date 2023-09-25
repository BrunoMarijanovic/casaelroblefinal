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
        //
        Schema::create('imgs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('imagen');

            $table->string('tituloES');
            $table->string('tituloCAT');
            $table->string('tituloEN');
            $table->string('tituloFR');
            
            $table->string('descripcionES');
            $table->string('descripcionCAT');
            $table->string('descripcionEN');
            $table->string('descripcionFR');
            
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
