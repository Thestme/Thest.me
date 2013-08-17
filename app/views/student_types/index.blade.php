@extends('layouts.scaffold')

@section('main')

<h1>All Student_types</h1>

<p>{{ link_to_route('student_types.create', 'Add new student_type') }}</p>

@if ($student_types->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($student_types as $student_type)
				<tr>
					<td>{{{ $student_type->name }}}</td>
                    <td>{{ link_to_route('student_types.edit', 'Edit', array($student_type->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('student_types.destroy', $student_type->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no student_types
@endif

@stop