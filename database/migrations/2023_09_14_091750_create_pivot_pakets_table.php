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
        Schema::create('pivot_pakets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paket_id')->nullable();
            $table->foreign('paket_id')->references('id')->on('master_pakets')->onDelete('cascade');
            $table->foreignId('jabatan_pilihan_id')->nullable();
            $table->foreign('jabatan_pilihan_id')->references('id')->on('master_jabatan_pilihans')->onDelete('cascade');
            $table->string('harga')->nullable();
            $table->enum('tipe_waktu', ['hari', 'bulan', 'tahun'])->nullable();
            $table->string('lama_waktu')->nullable();
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
        Schema::dropIfExists('pivot_pakets');
    }
};
