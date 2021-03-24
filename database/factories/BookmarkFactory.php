<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bookmark;
use Faker\Generator as Faker;

$factory->define(Bookmark::class, function (Faker $faker) {
    return [
        'link_title' => $faker->sentence(3),
        'url' => $faker->url,
        'publication_date' => $faker->dateTimeThisYear('-2 months'),
        'date_last_accessed' => $faker->dateTimeThisMonth('-12 days')
    ];
});
