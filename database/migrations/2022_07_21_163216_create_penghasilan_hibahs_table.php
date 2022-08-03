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
        Schema::create('penghasilan_hibahs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('jenis_penghasilan')->nullable();
            $table->text('alamat_pemberi_hibah')->nullable();
            $table->bigInteger('total_penghasilan_bersih')->nullable();
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
    Schema::dropIfExists('penghasilan_hibahs');
    }
};
