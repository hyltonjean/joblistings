<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Details</title>
	<style>
		ul {
			padding: 0;
			margin: 0;
		}

		li {
			color: #333;
			font-size: 20px;
			margin-bottom: 5px;
		}

		a {
			list-style-type: none;
			text-decoration: none;
		}
	</style>
</head>

<body>
	<h1>Jobs Details Page</h1>
	<p>{{ $job->title }}</p>
	<p>{{ $job->created_at->format('l d M Y') }}</p>
	<p>{{ $job->status }}</p>
	<p>{{ $job->languages_csv }}: {{ $job->languages_filter }}</p>
	<p>{{ $job->job_types_csv }}</p>


	<a href="/jobs/{{ $job->url }}/apply">Apply</a>
</body>

</html>
