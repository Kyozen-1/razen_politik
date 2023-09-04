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
        Schema::table('dpt_manuals', function (Blueprint $table) {
            $table->foreignId('dapil_id')->nullable();
            $table->foreign('dapil_id')->references('id')->on('master_dapils')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dpt_manuals', function (Blueprint $table) {
            //
        });
    }
};
