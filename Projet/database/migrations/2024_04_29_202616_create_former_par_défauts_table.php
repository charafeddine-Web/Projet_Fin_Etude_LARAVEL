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
        Schema::create('former_par_défauts', function (Blueprint $table) {
            // Ajoutez une clé primaire composée
            $table->primary(['professeur_id', 'classe_id']);
            
            // Clés étrangères vers les tables professeurs et classe
            $table->unsignedBigInteger('professeur_id');
            $table->unsignedBigInteger('classe_id');
            
            // Ajoutez les contraintes de clés étrangères
            $table->foreign('professeur_id')->references('id')->on('professeurs')->onDelete('cascade');
            $table->foreign('classe_id')->references('id')->on('classes')->onDelete('cascade');
            
            $table->timestamps();
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
        Schema::table('former_par_défauts', function (Blueprint $table) {
            $table->dropForeign(['professeur_id']);
            $table->dropForeign(['classe_id']);
        });
    }
};
