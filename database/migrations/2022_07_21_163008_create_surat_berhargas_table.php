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
        Schema::create('surat_berhargas', function (Blueprint $table) {
            $table->id();
            $table->text('jenis_surat')->nullable();
            $table->text('atas_nama')->nullable();
            $table->text('hubungan_keluarga')->nullable();
            $table->bigInteger('jumlah_kepemilikan')->nullable();
            $table->text('nama_perusahaan')->nullable();
            $table->bigInteger('harga_perolehan')->nullable();
            $table->bigInteger('nilai_saat_pelaporan')->nullable();
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
    Schema::dropIfExists('surat_berhargas');
    }
};
