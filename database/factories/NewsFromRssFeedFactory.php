<?php

use Faker\Generator as Faker;
use App\NewsFromRssFeed;

$factory->define(App\NewsFromRssFeed::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,2),
        'title' => $faker->text(50),
        'link' => $faker->text(50),
        'rss_feed_id' => $faker->numberBetween(1,2),
        'category_id' => $faker->numberBetween(1,2),
        'description' => $faker->text(255),
        'pubdate' => $faker->datetime(),
    ];
});
