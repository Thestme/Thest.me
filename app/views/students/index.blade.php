@extends('layouts.scaffold')

@section('main')

<h1>All Students</h1>

<p>{{ link_to_route('students.create', 'Add new student') }}</p>

@if ($students->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>First_name</th>
				<th>Last_name</th>
				<th>Email</th>
				<th>Born_at</th>
				<th>Password</th>
				<th>Country</th>
				<th>City</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($students as $student)
				<tr>
					<td>{{{ $student->first_name }}}</td>
					<td>{{{ $student->last_name }}}</td>
					<td>{{{ $student->email }}}</td>
					<td>{{{ $student->born_at }}}</td>
					<td>{{{ $student->password }}}</td>
					<td>{{{ $student->country }}}</td>
					<td>{{{ $student->city }}}</td>
                    <td>{{ link_to_route('students.edit', 'Edit', array($student->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('students.destroy', $student->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no students
@endif

@stop