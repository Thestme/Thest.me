@extends('layouts.scaffold')

@section('main')

<h1>All Project_application_areas</h1>

<p>{{ link_to_route('project_application_areas.create', 'Add new project_application_area') }}</p>

@if ($project_application_areas->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Enabled</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($project_application_areas as $project_application_area)
				<tr>
					<td>{{{ $project_application_area->enabled }}}</td>
                    <td>{{ link_to_route('project_application_areas.edit', 'Edit', array($project_application_area->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('project_application_areas.destroy', $project_application_area->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no project_application_areas
@endif

@stop