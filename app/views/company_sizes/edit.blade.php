@extends('layouts.scaffold')

@section('main')

<h1>Edit Company_size</h1>
{{ Form::model($company_size, array('method' => 'PATCH', 'route' => array('company_sizes.update', $company_size->id))) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('employee_quantity', 'Employee_quantity:') }}
            {{ Form::input('number', 'employee_quantity') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('company_sizes.show', 'Cancel', $company_size->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop