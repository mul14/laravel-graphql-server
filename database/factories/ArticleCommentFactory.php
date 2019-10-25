<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ArticleComment;
use Faker\Generator as Faker;

$factory->define(ArticleComment::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 30),
        'article_id' => $faker->numberBetween(1, 30),
        'comment' => $faker->paragraph($faker->numberBetween(1, 3)),
    ];
});
