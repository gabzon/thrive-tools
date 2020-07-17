<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\File;
use Faker\Generator as Faker;

$factory->define(File::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'version' => $faker->word,
        'author' => $faker->word,
        'type' => $faker->randomElement(["pdf","example","kit"]),
        'lang' => $faker->randomElement(["en","fr","es","pt","it","hr","de","ja","nl","cn","rs"]),
        'file' => $faker->word,
    ];
});
