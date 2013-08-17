@extends('layouts.scaffold')

@section('main')

<h1>Edit Project_state</h1>
{{ Form::model($project_state, array('method' => 'PATCH', 'route' => array('project_states.update', $project_state->id))) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('project_states.show', 'Cancel', $project_state->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop