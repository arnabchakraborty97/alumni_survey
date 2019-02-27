@extends('layouts.app')

@section('title')

	@if(isset($department)) Edit @else Create @endif Department

@endsection

@section('content')

	<div class="card">
		<div class="card-header">
			@if(isset($department)) Edit @else Create @endif Department
		</div>
		<div class="card-body">
			
			{{ Form::open(['action' => isset($department)?['DepartmentController@update', $department]:'DepartmentController@store', 'method' => 'POST']) }}

				{{ Form::label('name', 'Name', ['class' => 'col-form-label']) }}
				{{ Form::text('name', isset($department)? $department->name: '', ['class' => 'form-control']) }}

				{{ Form::label('code', 'Code', ['class' => 'col-form-label']) }}
				{{ Form::text('code', isset($department)? $department->code: '', ['class' => 'form-control']) }}

				@if(isset($department))
					{{ Form::hidden('_method', 'PUT') }}
				@endif

				<div class="text-center"> 
					{{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
				</div>
			{{ Form::close() }}

		</div>
	</div>

@endsection