<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Membuat Tabel towers

        Schema::create('towers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_tower');
            $table->string('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('id_kec');
            $table->string('id_desa');
            $table->string('koor_lat');
            $table->string('koor_leng');
            $table->integer('tinggi');
            $table->date('tanggal_imb');
            $table->integer('id_provider');
            $table->string('ket_pemilik');
            $table->date('akhir_sewa');
            $table->string('nama_pemilik');
            $table->integer('id_jenis_tower');
            $table->string('id_foto');
            $table->string('id_user');
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
        Schema::dropIfExists('towers');
    }
}
