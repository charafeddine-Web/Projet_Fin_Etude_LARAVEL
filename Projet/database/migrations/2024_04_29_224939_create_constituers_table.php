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
        Schema::create('constituers', function (Blueprint $table) {
            
            $table->primary(['id_info', 'Mat_prof','id_emploi','id_salle']);

            $table->unsignedBigInteger('id_info');
            $table->unsignedBigInteger('Mat_prof');
            $table->unsignedBigInteger('id_emploi');
            $table->unsignedBigInteger('id_salle');

            $table->foreign('id_info')->references('id')->on('info_modules')->onDelete('cascade');
            $table->foreign('Mat_prof')->references('id')->on('professeurs')->onDelete('cascade');
            $table->foreign('id_emploi')->references('id')->on('emploi_classes')->onDelete('cascade');
            $table->foreign('id_salle')->references('id')->on('salles')->onDelete('cascade');

            $table->time('HeureDébut');
            $table->time('HeureFin');
            $table->string('ModeSéance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('constituers', function (Blueprint $table) {
            $table->dropForeign(['Mat_prof']);
            $table->dropForeign(['id_info']);
            $table->dropForeign(['id_emploi']);
            $table->dropForeign(['id_Salle']);
        });
    }
};
