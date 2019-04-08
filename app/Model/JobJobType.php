<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model as PivotClass;

class JobJobType extends PivotClass
{

	public function pivot()
	{
		return $this->belongsToMany(JobType::class, Job::class);
	}
}
