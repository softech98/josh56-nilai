<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRombelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('is_rombel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namaRombel', 10);
            $table->integer('jurusanId');
            $table->enum('tingkat',  ['10', '11','12']);
            $table->integer('periodeId');
            $table->string('walikelas',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('is_rombel');
    }
}
