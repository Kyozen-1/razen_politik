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
        Schema::create('akun_relawans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('color_layout')->nullable();
            $table->string('nav_color')->nullable();
            $table->string('placement')->nullable();
            $table->string('behaviour')->nullable();
            $table->string('layout')->nullable();
            $table->string('radius')->nullable();
            $table->foreignId('relawan_id')->nullable();
            $table->foreign('relawan_id')->references('id')->on('relawans')->onDelete('cascade');
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
        Schema::dropIfExists('akun_relawans');
    }
};
