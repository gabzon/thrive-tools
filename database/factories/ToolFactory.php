<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tool;
use Faker\Generator as Faker;

$factory->define(Tool::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
        'tagline' => $faker->word,
        'participants' => $faker->word,
        'icon' => $faker->word,
        'image' => $faker->word,
        'image_file' => $faker->word,
        'excerpt' => $faker->text,
        'description' => $faker->text,
        'tips' => $faker->text,
        'duration' => $faker->numberBetween(-10000, 10000),
        'duration_unit' => $faker->word,
        'user_id' => factory(\App\User::class),
    ];
});
