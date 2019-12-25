<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTvGuideChannelsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tv_guide_channels', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->integer('row_number');
      $table->integer('number');
      $table->string('name');
      $table->string('channel_code');
      $table->string('channel_genre');
      $table->boolean('osn_play');
      $table->string('osn_play_url');
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
    Schema::dropIfExists('tv_guide_channels');
  }
}
