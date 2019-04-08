<?php

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model\JobType::class, function (Faker $faker) {

	$name = $faker->sentence(3);

  return [
		'name' => $name,
		'slug' => str_slug($name)
  ];
});
