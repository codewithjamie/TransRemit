<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\agent;
use Faker\Generator as Faker;

$factory->define(agent::class, function (Faker $faker) {
  return [
      'name'  => $faker->name,
      'username'  => $faker->userName ,
      'phone'  => $faker->phoneNumber,
      'email'  => $faker->safeEmail ,
      'branch'  => $faker->text(10),
      'address'  => $faker->address,
      'image'  => $faker->image,
      'status'  => 'Active',
  ];
});
