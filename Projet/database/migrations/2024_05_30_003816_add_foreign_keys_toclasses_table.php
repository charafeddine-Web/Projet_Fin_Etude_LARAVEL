<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToclassesTable extends Migration
{
    public function up()
    {
        Schema::table('classes', function (Blueprint $table) {
            $table->foreign('code_filiere')->references('id')->on('filieres')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('classes', function (Blueprint $table) {
            $table->dropForeign(['code_filiere']);
        });
    }
}
