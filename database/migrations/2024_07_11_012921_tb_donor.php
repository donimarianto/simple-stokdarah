<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_donor', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pendonor');
            $table->string('nama_pegawai');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('email');
            $table->string('golongan_darah');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('tanggal_donasi');
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
        //
    }
};
