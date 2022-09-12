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
        Schema::create('penghasilan_profesis', function (Blueprint $table) {
            $table->id();
            $table->text('jenis_penghasilan')->nullable();
            $table->text('lembaga')->nullable();
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
    Schema::dropIfExists('penghasilan_profesis');
    }
};
