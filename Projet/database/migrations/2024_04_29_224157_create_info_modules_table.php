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
        Schema::create('info_modules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('code_Module');
            $table->string('annee_formation');
            $table->string('optimisé');
            $table->string('durée_Pres');
            $table->string('durée_Fad');
            $table->timestamps();
            $table->foreign('code_Module')->references('id')->on('modules')->onDelete('cascade');
           

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('info_modules', function (Blueprint $table) {
            $table->dropForeign(['code_Module']);
        });
    }
};
