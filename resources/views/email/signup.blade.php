@extends ('layout')
@section('contenu')

<div style="max-width: 320px; margin: 0 auto; padding: 20px; background: #fff;">
	<h3>Message via le SMTP Mailtrap :</h3>
	<div>{{ $user['message'] }}</div>
</div>

@endsection