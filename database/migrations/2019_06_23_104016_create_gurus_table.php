<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('is_guru', function (Blueprint $table) {
            $table->string('nip', 18)->primary; 
            $table->string('email'); //relasi dengan tabel is_user
            $table->string('nama');
            $table->string('tempatLahir'); // tempat lahir user
            $table->date('tanggalLahir'); //tgl lahir user
            $table->enum('jenisKelamin', ['L', 'P']); //jenis kelamin user
            $table->string('alamat');
            $table->string('noTelp', 13);
            $table->string('foto')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('is_guru');
    }
}
