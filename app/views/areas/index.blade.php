@extends('layouts.scaffold')

@section('main')

<h1>All Areas</h1>

<p>{{ link_to_route('areas.create', 'Add new area') }}</p>

@if ($areas->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($areas as $area)
				<tr>
					<td>{{{ $area->name }}}</td>
                    <td>{{ link_to_route('areas.edit', 'Edit', array($area->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('areas.destroy', $area->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no areas
@endif

@stop