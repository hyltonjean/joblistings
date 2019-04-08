<?php

namespace App\Http\Controllers;

use App\Model\Job;
use App\Model\JobType;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use App\Mail\SendConsultantEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;
use Cubitworx\Laravel\Languages\Model\Language;
use Illuminate\Pagination\Paginator;

class JobController extends Controller
{
	public function list(Request $request)
	{
		$jobs = Job::paginate(12);
		$jobtypes = JobType::all();
		$languages = Language::all();

		$t = Input::get('t');
		$l = Input::get('l');

		if (request()->has('t')) {
			$data = JobType::find($t)
				->jobs()
				->where('job_job_type.job_type_id', $t)
				->paginate(12);

			$data->appends(['t' => $t]);

			if ($data) {
				return view('filters.jobtype', compact('data', 'jobtypes', 'languages'));
			}
		} else {
			return view('job.index', compact('jobs', 'jobtypes', 'languages'));
		}
	}

	public function show($url)
	{
		$job = Job::where('url', $url)->firstOrFail();
		return view('job.details', ['job' => $job]);
	}

	public function create($url)
	{
		$job = Job::where('url', $url)->firstOrFail();
		return view('job.apply', ['job' => $job]);
	}

	public function store(Request $request, $url)
	{
		$job = Job::where('url', $url)->firstOrFail();

		$this->validate($request, [
			' firstName ' => ' required | max: 100 ',
			' lastName ' => ' required | max: 100 ',
			' dateOfBirth ' => ' required | max: 25 ',
			' nationality ' => ' required | max: 50 ',
			' email ' => ' required | email ',
			' telephone ' => ' required | max: 25 ',
			' message ' => ' required | max: 200 ',
			' checkbox ' => ' required '
		]);

		Mail::to($request->email)->queue(new SendEmail($request->input()));
		Mail::to(env('CONSULTANT_MAIL'))->queue(new SendConsultantEmail($request->input()));

		return redirect()->route('job.thanks', ['job' => $job]);
	}

	public function thanks()
	{
		return view('job.thank-you');
	}
}
