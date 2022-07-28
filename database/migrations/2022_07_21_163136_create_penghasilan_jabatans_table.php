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
        Schema::create('penghasilan_jabatans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('gaji_pokok')->nullable();
            $table->bigInteger('tunjangan_jabatan')->nullable();
            $table->bigInteger('tunjangan_lain')->nullable();
            $table->bigInteger('potongan')->nullable();
            $table->bigInteger('penghasilan_bersih')->nullable();
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
    Schema::dropIfExists('penghasilan_jabatans');   
    }
};
