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
        Schema::create('hutangs', function (Blueprint $table) {
            $table->id();
            $table->string('atas_nama')->nullable();
            $table->string('hubungan_relasi_keluarga')->nullable();
            $table->string('nama_bank_lembaga_penyimpanan')->nullable();
            $table->bigInteger('no_rekening')->nullable();
            $table->bigInteger('saldo_saat_pelaporan')->nullable();
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
    Schema::dropIfExists('hutangs');
    }
};
