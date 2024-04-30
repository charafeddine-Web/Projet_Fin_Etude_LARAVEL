
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
        Schema::create('emploi_classes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_class');
            $table->string('annee_Formation');
            $table->string('date_debut');
            $table->string('date_fin');
            $table->timestamps();
            $table->foreign('ID_class')->references('id')->on('classes')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emploi_classes');
    }
};
