<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bookmark;
use App\Category;
use Faker\Generator as Faker;

use Illuminate\Support\Str;

$factory->define(Bookmark::class, function (Faker $faker) {

    $title = $faker->sentence(3);

    return [
        'link_title' => $title,
        'slug' => Str::slug($title),
        'category_id' => Category::takeRandomId(),
        'url' => $faker->url,
        'publication_date' => $faker->dateTimeThisYear('-2 months'),
        'date_last_accessed' => $faker->dateTimeThisMonth('-12 days')
    ];
});
