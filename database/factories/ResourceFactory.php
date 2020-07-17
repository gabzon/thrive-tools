<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Resource;
use Faker\Generator as Faker;

$factory->define(Resource::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
        'description' => $faker->text,
        'icon' => $faker->word,
        'image' => $faker->word,
        'affiliate_url' => $faker->word,
    ];
});
