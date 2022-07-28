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
        Schema::create('data_suami_istris', function (Blueprint $table) {
            $table->id();
            $table->text('nama_suami_istri')->nullable();
            $table->date('tempat_tanggal_lahir')->nullable();
            $table->text('pekerjaan')->nullable();
            $table->bigInteger('penghasilan_pertahun')->nullable();
            $table->bigInteger('alamat_rumah')->nullable();
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
    Schema::dropIfExists('data_suami_istris');
    }
};
