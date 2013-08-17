@extends('layouts.scaffold')

@section('main')

<h1>All Company_areas</h1>

<p>{{ link_to_route('company_areas.create', 'Add new company_area') }}</p>

@if ($company_areas->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Enabled</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($company_areas as $company_area)
				<tr>
					<td>{{{ $company_area->enabled }}}</td>
                    <td>{{ link_to_route('company_areas.edit', 'Edit', array($company_area->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('company_areas.destroy', $company_area->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no company_areas
@endif

@stop