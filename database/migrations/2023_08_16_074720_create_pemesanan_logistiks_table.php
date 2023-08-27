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
        Schema::create('pemesanan_logistiks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('logistik_id')->nullable();
            $table->foreign('logistik_id')->references('id')->on('logistiks')->onDelete('cascade');
            $table->string('kode')->nullable();
            $table->string('jumlah')->nullable();
            $table->longText('keterangan')->nullable();
            $table->enum('status', ['belum_diterima', 'sudah_diterima']);
            $table->dateTime('tgl_pemesanan')->nullable();
            $table->dateTime('tgl_terima')->nullable();
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
        Schema::dropIfExists('pemesanan_logistiks');
    }
};
