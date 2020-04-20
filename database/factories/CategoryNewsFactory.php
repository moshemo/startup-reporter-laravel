<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CategoryNews;
use Faker\Generator as Faker;

$factory->define(CategoryNews::class, function (Faker $faker) {

  return [
    'category_id' => $faker->numberBetween($min = 1, $max = 35),
    'news_id' => $faker->numberBetween($min = 1, $max = 150)
  ];

});
