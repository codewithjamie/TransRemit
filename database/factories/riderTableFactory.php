<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\system_book_rider;
use Faker\Generator as Faker;

$factory->define(system_book_rider::class, function (Faker $faker) {
    return [
      'name'  => $faker->name,
      'phone'  => $faker->phoneNumber,
      'email'  => $faker->safeEmail,
      'branch'  => $faker->text(10),
      'nationality' => $faker->country,
      'state' => $faker->state,
      'city' => $faker->city,
      'id_type' => $faker->unique()->text(10),
      'id_number' => '4' ,
      'address'  => $faker->address,
      'image'  => $faker->image,
      'qr_code'  => $faker->text(10),
      'keke_number'  => $faker->unique()->text(10),
      'rider_uid'  => $faker->unique()->text(10),
      'union'  => $faker->text(10),
    ];
});
