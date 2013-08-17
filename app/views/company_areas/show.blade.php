@extends('layouts.scaffold')

@section('main')

<h1>Show Company_area</h1>

<p>{{ link_to_route('company_areas.index', 'Return to all company_areas') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Enabled</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $company_area->enabled }}}</td>
                    <td>{{ link_to_route('company_areas.edit', 'Edit', array($company_area->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('company_areas.destroy', $company_area->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop