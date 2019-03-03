@extends('layouts.app')

@section('title')

	Surveys

@endsection

@section('content')

	<div class="card">
		<div class="card-header">Surveys</div>
		<div class="card-body">
			
			@if(count($surveys) > 0)
				<table class="table table-bordered">
					<thead class="thead-dark">
						<tr>
							<th>#</th>
							<th>Type</th>
							<th>Filled By</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody class="tbody-light">
						@foreach($surveys as $survey)

							<tr>
								<td>{{ $survey->id }}</td>
								<td><a href="{{ route('surveys.show', $survey) }}">{{ $survey->name }}</a></td>
								<td>@foreach($survey->answers as $answer) {{ $answer->body }} @break @endforeach</td>
								<td>
									{{ Form::open(['action' => ['SurveyController@destroy', $survey], 'method' => 'POST']) }}

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

	<br>

	<div class="text-center">
		<a href="{{ route('surveys.create') }}" class="btn btn-success">Add Survey</a>
	</div>

@endsection