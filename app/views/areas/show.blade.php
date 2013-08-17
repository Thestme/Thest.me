@extends('layouts.scaffold')

@section('main')

<h1>Show Area</h1>

<p>{{ link_to_route('areas.index', 'Return to all areas') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $area->name }}}</td>
                    <td>{{ link_to_route('areas.edit', 'Edit', array($area->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('areas.destroy', $area->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop