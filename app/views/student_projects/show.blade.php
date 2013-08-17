@extends('layouts.scaffold')

@section('main')

<h1>Show Student_project</h1>

<p>{{ link_to_route('student_projects.index', 'Return to all student_projects') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Enabled</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $student_project->enabled }}}</td>
                    <td>{{ link_to_route('student_projects.edit', 'Edit', array($student_project->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('student_projects.destroy', $student_project->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop