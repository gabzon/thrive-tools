<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Guide;
use Faker\Generator as Faker;

$factory->define(Guide::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
        'description' => $faker->text,
        'icon' => $faker->word,
        'image' => $faker->word,
        'user_id' => factory(\App\User::class),
    ];
});
