<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKompetensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('is_kompetensi', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('id_kompetensi', 10);
        //     $table->enum('aspek', ['K', 'P']);
        //     $table->integer('id_mapel');
        //     $table->enum('tingkat',  ['10', '11','12']);
        //     $table->text('kompetensi_dasar');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('is_kompetensi');
    }
}
