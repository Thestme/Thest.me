@extends('layouts.scaffold')

@section('main')

<h1>Create Company_size</h1>

{{ Form::open(array('route' => 'company_sizes.store')) }}
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


