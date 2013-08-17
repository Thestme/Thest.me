@extends('layouts.scaffold')

@section('main')

<h1>Edit Student_project</h1>
{{ Form::model($student_project, array('method' => 'PATCH', 'route' => array('student_projects.update', $student_project->id))) }}
	<ul>
        <li>
            {{ Form::label('enabled', 'Enabled:') }}
            {{ Form::checkbox('enabled') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('student_projects.show', 'Cancel', $student_project->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop