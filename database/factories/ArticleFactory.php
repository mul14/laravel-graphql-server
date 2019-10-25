<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'user_id' => $faker->numberBetween(1, 30),
        'body' => $faker->paragraph($faker->numberBetween(5, 25)),
    ];
});
