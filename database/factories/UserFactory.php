<?php

use App\Model;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| User Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Model\User::class, function (Faker $faker) {
	$randomDatetime = $faker->dateTimeBetween('-3 months', 'now');
	return [
		'created_at' => $randomDatetime,
		'email' => $faker->unique()->safeEmail,
		'email_verified_at' => now(),
		'first_name' => $faker->firstName,
		'last_name' => $faker->lastName,
		'password' => Hash::make('123456'),
		'remember_token' => str_random(10),
		'updated_at' => $randomDatetime,
	];
});
