@extends('layouts.scaffold')

@section('main')

<h1>Edit Project_selection</h1>
{{ Form::model($project_selection, array('method' => 'PATCH', 'route' => array('project_selections.update', $project_selection->id))) }}
	<ul>
        <li>
            {{ Form::label('enabled', 'Enabled:') }}
            {{ Form::checkbox('enabled') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('project_selections.show', 'Cancel', $project_selection->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop