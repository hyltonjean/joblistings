<?php

use App\Model;
use Illuminate\Database\Seeder;

class JobJobTypeSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$jobs = Model\Job::all();
		foreach($jobs as $job) {
			$jobtypes = Model\JobType::inRandomOrder()->limit(rand(1,3))->get();
			$job->job_types()->attach($jobtypes);
		}
	}
}
