<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Source;
use Faker\Generator as Faker;

$factory->define(Source::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement(["book","chapter","article","newspaper","website","conference","none"]),
        'author' => $faker->word,
        'title' => $faker->sentence(4),
        'location' => $faker->word,
        'publisher' => $faker->word,
        'year' => $faker->numberBetween(-10000, 10000),
        'isbn10' => $faker->word,
        'isbn13' => $faker->word,
        'url' => $faker->url,
        'chapter_title' => $faker->word,
        'pages' => $faker->word,
        'affiliate_link' => $faker->word,
        'image' => $faker->word,
        'visited_on' => $faker->date(),
        'number' => $faker->numberBetween(-10000, 10000),
        'volume' => $faker->word,
        'edition' => $faker->word,
    ];
});
