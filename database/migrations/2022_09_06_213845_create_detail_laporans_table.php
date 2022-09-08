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
        Schema::create('detail_laporans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('laporan_id')->nullable();
            $table->string('isi_1')->nullable();
            $table->string('isi_2')->nullable();
            $table->string('isi_3')->nullable();
            $table->string('isi_4')->nullable();
            $table->string('isi_5')->nullable();
            $table->string('isi_6')->nullable();
            $table->string('isi_7')->nullable();
            $table->string('isi_8')->nullable();
            $table->string('isi_9')->nullable();
            $table->string('isi_10')->nullable();
            $table->string('isi_11')->nullable();
            $table->string('isi_12')->nullable();
            $table->string('isi_13')->nullable();
            $table->string('isi_14')->nullable();
            $table->string('isi_15')->nullable();
            $table->string('isi_16')->nullable();
            $table->string('isi_17')->nullable();
            $table->string('isi_18')->nullable();
            $table->string('isi_19')->nullable();
            $table->string('isi_20')->nullable();
            $table->string('isi_21')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('detail_laporans');
    }
};
