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
        Schema::create('landing_page_bantuans', function (Blueprint $table) {
            $table->id();
            $table->json('section_1')->nullable();
            $table->json('section_2')->nullable();
            $table->json('section_3')->nullable();
            $table->json('section_4')->nullable();
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
        Schema::dropIfExists('landing_page_bantuans');
    }
};
