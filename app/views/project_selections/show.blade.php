@extends('layouts.scaffold')

@section('main')

<h1>Show Project_selection</h1>

<p>{{ link_to_route('project_selections.index', 'Return to all project_selections') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Enabled</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $project_selection->enabled }}}</td>
                    <td>{{ link_to_route('project_selections.edit', 'Edit', array($project_selection->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('project_selections.destroy', $project_selection->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop