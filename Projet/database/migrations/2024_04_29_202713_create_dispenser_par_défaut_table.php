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
        Schema::create('dispenser_par_défauts', function (Blueprint $table) {
            $table->primary(['code_Module', 'mat']);

            $table->unsignedBigInteger("code_Module");
            $table->unsignedBigInteger("mat");

            $table->foreign('code_Module')->references('id')->on('modules')->onDelete('cascade');
            $table->foreign('mat')->references('id')->on('professeurs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::table('dispenser_par_défauts', function (Blueprint $table) {
            $table->dropForeign(['mat']);
            $table->dropForeign(['code_Module']);
        });
    }
};
