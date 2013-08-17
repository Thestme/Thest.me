@extends('layouts.scaffold')

@section('main')

<h1>All Projects</h1>

<p>{{ link_to_route('projects.create', 'Add new project') }}</p>

@if ($projects->count())
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
			@foreach ($projects as $project)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no projects
@endif

@stop