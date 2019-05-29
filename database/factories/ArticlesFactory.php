<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        // 5.1: Format the Article Seed Data
        'title' => $faker->text(50),
        'body' => $faker->text(200)
    ];
});
