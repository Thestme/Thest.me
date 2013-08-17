@extends('layouts.scaffold')

@section('main')

<h1>Show Project_application_area</h1>

<p>{{ link_to_route('project_application_areas.index', 'Return to all project_application_areas') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Enabled</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $project_application_area->enabled }}}</td>
                    <td>{{ link_to_route('project_application_areas.edit', 'Edit', array($project_application_area->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('project_application_areas.destroy', $project_application_area->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop