<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('is_nilai', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('periode_id');
            $table->enum('aspek', ['K', 'P']);
            $table->integer('rombel_id');
            $table->integer('mapel_id');
            $table->string('siswa_nis');
            $table->integer('nilai');
            $table->integer('kd_id');
            $table->string('ket');
            $table->timestamps();

            $table->foreign('rombel_id')->references('id')->on('rombel')->onDelete('cascade');
            // $table->foreign('mapel_id')->references('id')->on('is_mapel')->onDelete('cascade');
            // $table->foreign('siswa_nis')->references('nis')->on('is_siswa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('is_nilai');
    }
}
