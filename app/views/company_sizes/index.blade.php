@extends('layouts.scaffold')

@section('main')

<h1>All Company_sizes</h1>

<p>{{ link_to_route('company_sizes.create', 'Add new company_size') }}</p>

@if ($company_sizes->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Employee_quantity</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($company_sizes as $company_size)
				<tr>
					<td>{{{ $company_size->name }}}</td>
					<td>{{{ $company_size->employee_quantity }}}</td>
                    <td>{{ link_to_route('company_sizes.edit', 'Edit', array($company_size->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('company_sizes.destroy', $company_size->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no company_sizes
@endif

@stop