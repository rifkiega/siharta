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
        Schema::create('uang_tunais', function (Blueprint $table) {
            $table->id();
            $table->text('jenis_kas')->nullable();
            $table->text('atas_nama')->nullable();
            $table->text('hubungan_keluarga')->nullable();
            $table->string('nama_bank_lembaga_penyimpanan')->nullable();
            $table->bigInteger('nomer_rekening')->nullable();
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
    Schema::dropIfExists('uang_tunais');
    }
};
