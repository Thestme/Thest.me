@extends('layouts.scaffold')

@section('main')

<h1>Edit Company</h1>
{{ Form::model($company, array('method' => 'PATCH', 'route' => array('companies.update', $company->id))) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>

        <li>
            {{ Form::label('password', 'Password:') }}
            {{ Form::text('password') }}
        </li>

        <li>
            {{ Form::label('operating_since', 'Operating_since:') }}
            {{ Form::text('operating_since') }}
        </li>

        <li>
            {{ Form::label('country', 'Country:') }}
            {{ Form::text('country') }}
        </li>

        <li>
            {{ Form::label('city', 'City:') }}
            {{ Form::text('city') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('companies.show', 'Cancel', $company->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop