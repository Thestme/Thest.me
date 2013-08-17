@extends('layouts.scaffold')

@section('main')

<h1>Show Project_state</h1>

<p>{{ link_to_route('project_states.index', 'Return to all project_states') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $project_state->name }}}</td>
                    <td>{{ link_to_route('project_states.edit', 'Edit', array($project_state->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('project_states.destroy', $project_state->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop