<?php

use Faker\Generator as Faker;

$factory->define(App\Guest::class, function (Faker $faker) {
    return [
        // 'name' => $faker->name,
        // 'email' => $faker->unique()->safeEmail,
        // // just for demo
        // 'city' => $faker->city,
        // 'country' => $faker->country,
        // 'avatar' => $faker->imageUrl(100, 100),
        // 'bio' => $faker->realText(rand(100, 550)),
        // 'password' => bcrypt('secret'),
        // 'remember_token' => str_random(10),
    ];
});
