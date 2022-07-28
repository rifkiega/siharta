<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harta_bergerak_kendaraans', function (Blueprint $table) {
            $table->id();
            $table->text('jenis_tranportasi')->nullable();
            $table->bigInteger('nomer_kendaraan')->nullable();
            $table->string('merk_model')->nullable();
            $table->date('tahun_pembuatan')->nullable();
            $table->text('atas_nama')->nullable();
            $table->text('hubungan_keluarga')->nullable();
            $table->bigInteger('nilai_perolehan')->nullable();
            $table->bigInteger('total_jual_saat_pelaporan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
    Schema::dropIfExists('harta_bergerak_kendaraans');
    }
};