<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Widget::class, function ($faker) {
  $name = $faker->unique()->word . ' ' . $faker->unique()->word;
  $slug = str_slug($name, "-");
  $user_id = rand(1,4);

  return [
    'name' => $name,
    'slug' => $slug,
    'user_id' => $user_id,
    ];
});
