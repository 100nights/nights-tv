<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\TvGuideChannel::class, function (Faker $faker) {
  return [
    'row_number' => $faker->numberBetween(1, 100),
    'number' => $faker->numberBetween(1, 100),
    'name' => $faker->sentence(),
    'channel_code' => $faker->word(),
    'osn_play' => $faker->boolean(),
    'osn_play_url' => $faker->url()
  ];
});
