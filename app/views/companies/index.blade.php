@extends('layouts.scaffold')

@section('main')

<h1>All Companies</h1>

<p>{{ link_to_route('companies.create', 'Add new company') }}</p>

@if ($companies->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Password</th>
				<th>Operating_since</th>
				<th>Country</th>
				<th>City</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($companies as $company)
				<tr>
					<td>{{{ $company->name }}}</td>
					<td>{{{ $company->email }}}</td>
					<td>{{{ $company->password }}}</td>
					<td>{{{ $company->operating_since }}}</td>
					<td>{{{ $company->country }}}</td>
					<td>{{{ $company->city }}}</td>
                    <td>{{ link_to_route('companies.edit', 'Edit', array($company->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('companies.destroy', $company->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no companies
@endif

@stop