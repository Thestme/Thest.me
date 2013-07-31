@layout('public_master')
@section('navbar')
	<li><a href="{{ URL::to('/') }}" class="active">Home</a></li>
	<li>{{ HTML::link('login.php', 'Sign in') }}</li>
	<li>{{ HTML::link('enterprise.php', 'Enterprise') }}</li>
@endsection