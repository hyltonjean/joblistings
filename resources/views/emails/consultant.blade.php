@component('mail::message')
		<h2>The client's information is as follows:</h2>

		First Name: {{ $data['firstName'] }}

		Last Name: {{ $data['lastName'] }}

		Date of Birth: {{ $data['dateOfBirth'] }}

	 	Nationality: {{ $data['nationality'] }}

		Email: {{ $data['email'] }}

	 	Telephone: {{ $data['telephone'] }}

	 	Message: {{ $data['message'] }}

	 	Checkbox: {{ $data['checkbox'] }}
@endcomponent
