@extends('layouts.scaffold')

@section('main')

<h1>Show Project</h1>

<p>{{ link_to_route('projects.index', 'Return to all projects') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Title</th>
				<th>Description</th>
				<th>Objectives</th>
				<th>Due_date</th>
				<th>Deployable</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $project->title }}}</td>
					<td>{{{ $project->description }}}</td>
					<td>{{{ $project->objectives }}}</td>
					<td>{{{ $project->due_date }}}</td>
					<td>{{{ $project->deployable }}}</td>
                    <td>{{ link_to_route('projects.edit', 'Edit', array($project->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('projects.destroy', $project->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop