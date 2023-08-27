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
        Schema::create('kunjungan_relawans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('relawan_id')->nullable();
            $table->foreign('relawan_id')->references('id')->on('relawans')->onDelete('cascade');
            $table->foreignId('jenis_survey_id')->nullable();
            $table->foreign('jenis_survey_id')->references('id')->on('master_jenis_surveys')->onDelete('cascade');
            $table->dateTime('tgl')->nullable();
            $table->foreignId('provinsi_id')->nullable();
            $table->foreign('provinsi_id')->references('id')->on('master_provinsis')->onDelete('cascade');
            $table->foreignId('kabupaten_kota_id')->nullable();
            $table->foreign('kabupaten_kota_id')->references('id')->on('master_kabupaten_kotas')->onDelete('cascade');
            $table->foreignId('kecamatan_id')->nullable();
            $table->foreign('kecamatan_id')->references('id')->on('master_kecamatans')->onDelete('cascade');
            $table->foreignId('kelurahan_id')->nullable();
            $table->foreign('kelurahan_id')->references('id')->on('master_kelurahans')->onDelete('cascade');
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
        Schema::dropIfExists('kunjungan_relawans');
    }
};
