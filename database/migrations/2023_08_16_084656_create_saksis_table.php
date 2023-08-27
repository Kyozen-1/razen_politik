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
        Schema::create('saksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('koordinator_id')->nullable();
            $table->foreign('koordinator_id')->references('id')->on('koordinators')->onDelete('cascade');
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
            $table->string('nama')->nullable();
            $table->string('email')->nullable();
            $table->string('no_hp')->nullable();
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->longText('alamat')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
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
        Schema::dropIfExists('saksis');
    }
};
