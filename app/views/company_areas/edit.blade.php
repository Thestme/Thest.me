@extends('layouts.scaffold')

@section('main')

<h1>Edit Company_area</h1>
{{ Form::model($company_area, array('method' => 'PATCH', 'route' => array('company_areas.update', $company_area->id))) }}
	<ul>
        <li>
            {{ Form::label('enabled', 'Enabled:') }}
            {{ Form::checkbox('enabled') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('company_areas.show', 'Cancel', $company_area->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop