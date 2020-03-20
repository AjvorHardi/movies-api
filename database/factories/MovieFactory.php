<?php

use Faker\Generator as Faker;
use App\Movie;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'director' => $faker->name,
        'imageURL' => $faker->imageURL,
        'duration' => $faker->numberBetween(0, 200),
        'releaseDate' => $faker->date,
        'genre' => $faker->word,
    ];
});