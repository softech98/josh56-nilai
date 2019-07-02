<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMapelGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('is_mapel_gurus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rombel_id')->nullable();
            $table->integer('mapel_id')->nullable();
            $table->integer('guru_id')->nullable();
            $table->integer('jurusan_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('is_mapel_gurus');
    }
}
