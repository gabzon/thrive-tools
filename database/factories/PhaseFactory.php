<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Phase;
use Faker\Generator as Faker;

$factory->define(Phase::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
        'description' => $faker->text,
        'icon' => $faker->word,
        'image' => $faker->word,
        'color' => $faker->word,
    ];
});
