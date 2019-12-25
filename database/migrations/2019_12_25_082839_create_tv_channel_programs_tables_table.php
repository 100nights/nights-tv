<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTvChannelProgramsTablesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tv_channel_programs_tables', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('title');
      $table->string('title_ar');
      $table->string('channel_code');
      $table->boolean('is_playing');
      $table->integer('start_minute');
      $table->integer('end_minute');
      $table->integer('empty_div_width');
      $table->integer('total_div_width');
      $table->boolean('is_today_date');
      $table->dateTime('duration_time')->nullable();
      $table->boolean('is_last_row')->default(false);
      $table->dateTime('start_date_time');
      $table->dateTime('end_date_time');
      $table->string('genre')->nullable();
      $table->string('genre_ar')->nullable();
      $table->integer('channel_number');
      $table->dateTime('duration');
      $table->dateTime('showtime');
      $table->integer('episode_id');
      $table->string('program_type')->nullable();
      $table->string('epguniqid');

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
    Schema::dropIfExists('tv_channel_programs_tables');
  }
}
