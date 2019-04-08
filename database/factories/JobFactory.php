<?php

use App\Model;
use Faker\Generator as Faker;
use Cubitworx\Laravel\Languages\Model\Language;

/*
|--------------------------------------------------------------------------
| Job Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Model\Job::class, function(Faker $faker) {
	$title = $faker->sentence(10);
	$status = $faker->randomElement(['Published', 'Unpublished']);
	$randomIds = Language::inRandomOrder()->limit(rand(1,3))->get()->pluck('id');

	return [
		'title' => $title,
		'url' => str_slug($title),
		'status' => $status,
		'languages' => $randomIds
	];
});
