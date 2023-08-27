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
        Schema::create('pivot_jabatan_pilihan_penggunas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengguna_id')->nullable();
            $table->foreign('pengguna_id')->references('id')->on('penggunas')->onDelete('cascade');
            $table->foreignId('jabatan_pilihan_id')->nullable();
            $table->foreign('jabatan_pilihan_id')->references('id')->on('master_jabatan_pilihans')->onDelete('cascade');
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
        Schema::dropIfExists('pivot_jabatan_pilihan_penggunas');
    }
};
