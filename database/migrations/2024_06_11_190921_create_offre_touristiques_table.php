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
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agence_id');
            $table->foreign('agence_id')->references('id')->on('agences');

            $table->string('nom');
            $table->string('destination');
            $table->float('prix');
            $table->integer('duree');
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offre_touristiques');
    }
};
