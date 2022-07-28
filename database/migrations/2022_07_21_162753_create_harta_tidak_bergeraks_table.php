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
        Schema::create('harta_tidak_bergeraks', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_harta')->nullable();
            $table->bigInteger('luas_tanah')->nullable();
            $table->string('atas_nama')->nullable();
            $table->text('alamat')->nullable();
            $table->date('tahun_perolehan')->nullable();
            $table->bigInteger('harga_peroleh')->nullable();
            $table->bigInteger('total_njop_saat_pelaporan')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
    Schema::dropIfExists('harta_tidak_bergeraks');
    }
};
