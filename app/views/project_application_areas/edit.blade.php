@extends('layouts.scaffold')

@section('main')

<h1>Edit Project_application_area</h1>
{{ Form::model($project_application_area, array('method' => 'PATCH', 'route' => array('project_application_areas.update', $project_application_area->id))) }}
	<ul>
        <li>
            {{ Form::label('enabled', 'Enabled:') }}
            {{ Form::checkbox('enabled') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('project_application_areas.show', 'Cancel', $project_application_area->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop