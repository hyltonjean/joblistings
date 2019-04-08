<?php

namespace App\Model;

use Cubitworx\Laravel\Languages\Model\Language;
use Illuminate\Database\Eloquent\Model as BaseClass;

class Job extends BaseClass
{

	protected $casts = [
		'languages' => 'array',
		'job_types' => 'array'
	];

	public function job_types()
	{
		return $this->belongsToMany(JobType::class);
	}

	public function getLanguagesCsvAttribute()
	{
		return Language::whereIn('id', $this->languages)->pluck('name')->implode(', ');
	}

	public function getLanguagesFilterAttribute()
	{
		return Language::whereIn('id', $this->languages)->pluck('id');
	}

	public function getJobTypesCsvAttribute()
	{
		return $this->job_types->pluck('name')->implode(', ');
	}
}
