@layout('public_master')
@section('navbar')
	<li><a href="{{ URL::to('/') }}" class="active">Home</a></li>
	<li>{{ HTML::link('/', 'Home') }}</li>
	<li>{{ HTML::link('about', 'Sign in') }}</li>
	<li><a class="btn-header" href="enterprise.php">Enterprise</a></li>
@endsection