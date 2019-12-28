<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDateToTvChannelProgramsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tv_channel_programs_tables', function (Blueprint $table) {
            $table->string('date')->default(\Carbon\Carbon::now()->timezone('Asia/Baghdad')->format('m/d/Y'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tv_guide_channels', function (Blueprint $table) {
            $table->removeColumn('date');
        });
    }
}
