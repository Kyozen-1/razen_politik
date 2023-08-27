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
        Schema::create('responden_kunjungans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kunjungan_relawan_id')->nullable();
            $table->foreign('kunjungan_relawan_id')->references('id')->on('kunjungan_relawans')->onDelete('cascade');
            $table->string('nama')->nullable();
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
        Schema::dropIfExists('responden_kunjungans');
    }
};
