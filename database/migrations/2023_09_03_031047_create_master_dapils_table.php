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
        Schema::create('master_dapils', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->foreignId('jabatan_pilihan_id')->nullable();
            $table->foreign('jabatan_pilihan_id')->references('id')->on('master_dapils')->onDelete('cascade');
            $table->foreignId('provinsi_id')->nullable();
            $table->foreign('provinsi_id')->references('id')->on('master_provinsis')->onDelete('cascade');
            $table->foreignId('kabupaten_kota_id')->nullable();
            $table->foreign('kabupaten_kota_id')->references('id')->on('master_kabupaten_kotas')->onDelete('cascade');
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
        Schema::dropIfExists('master_dapils');
    }
};
