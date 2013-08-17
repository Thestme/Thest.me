@extends('layouts.scaffold')

@section('main')

<h1>All Student_projects</h1>

<p>{{ link_to_route('student_projects.create', 'Add new student_project') }}</p>

@if ($student_projects->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Enabled</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($student_projects as $student_project)
				<tr>
					<td>{{{ $student_project->enabled }}}</td>
                    <td>{{ link_to_route('student_projects.edit', 'Edit', array($student_project->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('student_projects.destroy', $student_project->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no student_projects
@endif

@stop