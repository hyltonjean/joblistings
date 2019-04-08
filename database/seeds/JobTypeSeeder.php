<?php

use App\Model;
use Illuminate\Database\Seeder;

class JobTypeSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(Model\JobType::class, 30)->create();
	}
}