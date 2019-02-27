@extends('layouts.app')

@section('title')

	Departments

@endsection

@section('content')

	<div class="card">
		<div class="card-header">
			Departments
		</div>
		<div class="card-body">
			
			@if (count($departments) > 0)
				<table class="table table-bordered">
					<thead class="thead-dark">
						<tr>
							<th>Name</th>
							<th>Code</th>
							<th colspan="2">Actions</th>
						</tr>
					</thead>
					<tbody class="tbody-light">
						@foreach($departments as $department)

							<tr>
								<td>{{ $department->name }}</td>
								<td>{{ $department->code }}</td>
								<td>
									<a href="{{ route('departments.edit', $department) }}" class="btn btn-primary btn-sm">Edit</a>
								</td>
								<td>
									{{ Form::open(['action' => ['DepartmentController@destroy', $department], 'method' => 'POST']) }}

										{{ Form::hidden('_method', 'DELETE') }}
										{{ Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) }}

									{{ Form::close() }}
								</td>
							</tr>

						@endforeach
					</tbody>
				</table>
			@else
				Nothing to show
			@endif

		</div>
	</div>

	<div class="text-center">
		<a href="{{ route('departments.create') }}" class="btn btn-success">Add Department</a>
	</div>

@endsection