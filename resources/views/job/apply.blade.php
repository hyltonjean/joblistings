<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Application</title>

</head>
<body>

	<div>
			@if(count($errors) > 0)
			<ul>
			@foreach($errors->all() as $error)
				<li>
					{{ $error }}
				</li>
			@endforeach
		</ul>
		@endif
	</div>

	<div>
		<h2>Apply for this job</h2>
	</div>

		<form action="/jobs/{{ $job->url }}/apply" method="post">
				{{ csrf_field() }}
			<div class="form-group">
				<label for="firstName">First Name</label>
				<input type="text" name="firstName" class="form-control">
			</div>
			<div class="form-group">
				<label for="lastName">Last Name</label>
				<input type="text" name="lastName" class="form-control">
			</div>
			<div class="form-group">
				<label for="dateOfBirth">Date of Birth</label>
				<input type="date" name="dateOfBirth" class="form-control">
			</div>
			<div class="form-group">
				<label for="nationality">Nationality</label>
				<input type="text" name="nationality" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="telephone">Telephone</label>
				<input type="tel" name="telephone" class="form-control">
			</div>
			<div class="form-group">
				<label for="message">Message</label>
				<textarea name="message" id="message" cols="5" rows="5" class="form-control">I would like to apply to position {{ $job->title }} and similar positions</textarea>
			</div>
			<div class="form-group">
				<label for="checkbox">I agree to the data protection and privacy policy and to being contacted about services they provide.</label>
				<input type="checkbox" name="checkbox">
			</div>
			<div class="form-group">
				<div class="text-center">
					<button type="submit">Apply</button>
				</div>
			</div>
		</form>
	</div>
</div>
</body>
</html>
