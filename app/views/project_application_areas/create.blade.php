@extends('layouts.scaffold')

@section('main')

<h1>Create Project_application_area</h1>

{{ Form::open(array('route' => 'project_application_areas.store')) }}
	<ul>
        <li>
            {{ Form::label('enabled', 'Enabled:') }}
            {{ Form::checkbox('enabled') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


