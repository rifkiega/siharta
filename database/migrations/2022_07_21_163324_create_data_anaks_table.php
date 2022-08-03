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
        Schema::create('data_anaks', function (Blueprint $table) {
            $table->id();
            $table->text('nama_anak')->nullable();
            $table->string('tempat')->nullable();
            $table->dateTime('tanggal_lahir')->nullable();
            $table->text('jenis_kelamin')->nullable();
            $table->text('pekerjaan')->nullable();
            $table->text('alamat_rumah')->nullable();
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
        Schema::dropIfExists('data_anaks');
    }
};
