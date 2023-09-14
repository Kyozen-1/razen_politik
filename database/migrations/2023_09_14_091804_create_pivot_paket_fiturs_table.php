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
        Schema::create('pivot_paket_fiturs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pivot_paket_id')->nullable();
            $table->foreign('pivot_paket_id')->references('id')->on('pivot_pakets')->onDelete('cascade');
            $table->foreignId('fitur_id')->nullable();
            $table->foreign('fitur_id')->references('id')->on('master_fiturs')->onDelete('cascade');
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
        Schema::dropIfExists('pivot_paket_fiturs');
    }
};
