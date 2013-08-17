@extends('layouts.scaffold')

@section('main')

<h1>Edit Student_type</h1>
{{ Form::model($student_type, array('method' => 'PATCH', 'route' => array('student_types.update', $student_type->id))) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('student_types.show', 'Cancel', $student_type->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop