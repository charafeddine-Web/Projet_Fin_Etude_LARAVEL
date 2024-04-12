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
        Schema::create('professeurs', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_Professeur');
            $table->string('Prenom_Professeur');
            $table->string('Date_Naissance');
            $table->string('Date_Recrutement');
            $table->string('function');
            $table->string('situation_familiale');
            $table->string('Nombre_enfants');
            $table->string('secteur');
            $table->string('grade');
            $table->string('echelle');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professeurs');
    }
};
