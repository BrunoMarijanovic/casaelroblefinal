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
        Schema::create('normas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('parrafo01ES');
            $table->string('parrafo01CAT');
            $table->string('parrafo01EN');
            $table->string('parrafo01FR');
            
            $table->string('parrafo02ES');
            $table->string('parrafo02CAT');
            $table->string('parrafo02EN');
            $table->string('parrafo02FR');
            
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
