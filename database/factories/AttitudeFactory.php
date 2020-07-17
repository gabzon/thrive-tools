<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Attitude;
use Faker\Generator as Faker;

$factory->define(Attitude::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
        'description' => $faker->text,
        'icon' => $faker->word,
        'color' => $faker->word,
    ];
});
