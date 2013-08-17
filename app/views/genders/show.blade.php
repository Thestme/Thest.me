@extends('layouts.scaffold')

@section('main')

<h1>Show Gender</h1>

<p>{{ link_to_route('genders.index', 'Return to all genders') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $gender->name }}}</td>
                    <td>{{ link_to_route('genders.edit', 'Edit', array($gender->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('genders.destroy', $gender->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop