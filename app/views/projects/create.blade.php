@extends('layouts.scaffold')

@section('main')

<h1>Create Project</h1>

{{ Form::open(array('route' => 'projects.store')) }}
	<ul>
        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </li>

        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::text('description') }}
        </li>

        <li>
            {{ Form::label('objectives', 'Objectives:') }}
            {{ Form::text('objectives') }}
        </li>

        <li>
            {{ Form::label('due_date', 'Due_date:') }}
            {{ Form::text('due_date') }}
        </li>

        <li>
            {{ Form::label('deployable', 'Deployable:') }}
            {{ Form::text('deployable') }}
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


