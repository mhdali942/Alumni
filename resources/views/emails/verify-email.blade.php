	@component('mail::message')

	al madinah International university

	# Introduction



	The body of your message.

	@component('mail::button', ['url' => ''])
	Button Text
	@endcomponent

	Thanks,<br>
	{{ config('app.name') }}
	@endcomponent