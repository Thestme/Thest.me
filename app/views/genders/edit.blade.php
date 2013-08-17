@extends('layouts.scaffold')

@section('main')

<h1>Edit Gender</h1>
{{ Form::model($gender, array('method' => 'PATCH', 'route' => array('genders.update', $gender->id))) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('genders.show', 'Cancel', $gender->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop