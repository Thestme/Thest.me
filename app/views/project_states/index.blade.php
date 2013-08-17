@extends('layouts.scaffold')

@section('main')

<h1>All Project_states</h1>

<p>{{ link_to_route('project_states.create', 'Add new project_state') }}</p>

@if ($project_states->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($project_states as $project_state)
				<tr>
					<td>{{{ $project_state->name }}}</td>
                    <td>{{ link_to_route('project_states.edit', 'Edit', array($project_state->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('project_states.destroy', $project_state->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no project_states
@endif

@stop