@extends('layouts.scaffold')

@section('main')

<h1>Show University</h1>

<p>{{ link_to_route('universities.index', 'Return to all universities') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $university->name }}}</td>
                    <td>{{ link_to_route('universities.edit', 'Edit', array($university->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('universities.destroy', $university->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop