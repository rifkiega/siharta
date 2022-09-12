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
        Schema::create('data_pribadis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('laporan_id')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->bigInteger('nomer_ktp')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat')->nullable();
            $table->dateTime('tanggal_lahir')->nullable();
            $table->string('agama')->nullable();
            $table->string('status_perkawinan')->nullable();
            $table->bigInteger('nip')->nullable();
            $table->string('pangkat_golongan')->nullable();
            $table->string('eselon')->nullable();
            $table->string('jabatan')->nullable();
            $table->dateTime('terhitung_mulai_tanggal')->nullable();
            $table->string('unit_kerja')->nullable();
            $table->text('kantor')->nullable();
            $table->bigInteger('kode_pos_kantor')->nullable();
            $table->text('rumah')->nullable();
            $table->bigInteger('kode_pos_rumah')->nullable();
            $table->bigInteger('nomer_telephon')->nullable();
            $table->bigInteger('npwp')->nullable();
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
        Schema::dropIfExists('data_pribadis');
    }
};
