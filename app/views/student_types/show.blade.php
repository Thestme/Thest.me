@extends('layouts.scaffold')

@section('main')

<h1>Show Student_type</h1>

<p>{{ link_to_route('student_types.index', 'Return to all student_types') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $student_type->name }}}</td>
                    <td>{{ link_to_route('student_types.edit', 'Edit', array($student_type->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('student_types.destroy', $student_type->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop