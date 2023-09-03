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
        Schema::create('pivot_kecamatan_master_dapils', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dapil_id')->nullable();
            $table->foreign('dapil_id')->references('id')->on('master_dapils')->onDelete('cascade');
            $table->foreignId('kecamatan_id')->nullable();
            $table->foreign('kecamatan_id')->references('id')->on('master_kecamatans')->onDelete('cascade');
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
        Schema::dropIfExists('pivot_kecamatan_master_dapils');
    }
};
