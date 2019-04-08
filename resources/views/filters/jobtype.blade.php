<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	 crossorigin="anonymous">
	<title>Laravel</title>
	<style>
	</style>
</head>

<body>
	<h1 class="text-center">Welcome to Jobs</h1>
	<h5 class="text-center">Filter Jobs by</h5>

	<div class="container-fluid">
		<div class="row align-items-start">
			<div class="col-lg-6">
				<h4 class="text-left ml-5">Jobs</h4>
				<ul class="flex-wrap">

					@if(isset($data)) @foreach ($data as $job)

					<a href="/jobs/{{ $job->url }}">
						<li class="d-flex justify-content-between text-left ml-2">{{$job->id}}:{{ $job->title }}:{{ $job->languages_filter }}</li>
					</a>
					<small class="d-flex justify-content-between text-left ml-2">{{ $job->created_at->diffForHumans() }}</small> @endforeach

				</ul>
				<div class="d-flex justify-content-left">
					<ul>
						{!! $data->render() !!}
					</ul>
				</div>
			</div>
			@endif

			<div class="col-lg-6">
				<h5 class="text-center">Job Type</h5>
				<table class="table-condensed d-flex flex-wrap">
					@foreach($jobtypes as $jobtype)
					<tbody>
						<tr>
							<td>
								<form action="/jobs" method="get">
									<input type="hidden" name="t" value="{{ $jobtype->id }}">
									<input type="submit" value="{{$jobtype->id}}: {{$jobtype->name}} --" style="background:none!important;color:#007bff;border:none;padding:0!important;font:inherit;cursor:pointer;">
								</form>
							</td>
						</tr>
					</tbody>
					@endforeach
				</table>
				<hr>
				<h5 class="text-center">Language</h5>
				<table class="table-condensed d-flex flex-wrap">
					@foreach($languages as $language)
					<tbody>
						<tr>
							<td>
								<form action="/jobs" method="get">
									<input type="hidden" name="l" value="{{ $jobtype->id }}">
									<input type="submit" value="{{$language->id}}: {{$language->name}} --" style="background:none!important;color:#007bff;border:none;padding:0!important;font:inherit;cursor:pointer;">
								</form>
							</td>
						</tr>
					</tbody>
					@endforeach
				</table>
			</div>
</body>

</html>
