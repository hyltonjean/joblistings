<?php

use App\Model;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(Model\Job::class, 1000)->create();
	}
}
