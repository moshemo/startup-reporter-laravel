<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use App\News;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(News::class, function (Faker $faker) {

    $title = $faker->sentence;
    $slug = Str::slug($title, '-');

    return [

      'title' =>$title,
      // 'title' => $faker->sentence,
      'slug' => $slug,
      'excerpt' => $faker->text,
      'body' => $faker->paragraph(4),

      'author_id' => $faker->numberBetween($min = 1, $max = 50),

      'article_url' => $faker->url,
      // 'category' => $faker->word,
      'img_url' => $faker->imageUrl,
      'keywords' => $faker->words(3, 7),
      // 'source_id' => '',

      'date_published' => $faker->dateTime('m j, L'),

    ];
});
