<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Industry;
use Faker\Generator as Faker;

$factory->define(Industry::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
        'description' => $faker->text,
        'icon' => $faker->word,
        'image' => $faker->word,
        'sector' => $faker->randomElement(["primary","secondary","tertiary","public"]),
    ];
});
