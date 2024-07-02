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
        Schema::table('touristes', function (Blueprint $table) {
        $table->string('nationalite')->nullable();
        $table->string('preference')->nullable();
        $table->dropColumn('nom');
        $table->dropColumn('prenom');
        $table->dropColumn('email')->unique();
        $table->dropColumn('telephone');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('touristes', function (Blueprint $table) {
        $table->dropColumn('nationalite');
        $table->dropColumn('preference');
        $table->string('nom');
        $table->string('prenom');
        $table->string('email')->unique();
        $table->integer('telephone');
        });
    }
};
