@extends('layouts.app')

@section('title')

	Questions

@endsection

@section('content')

	<div class="card">
		<div class="card-header">Questions</div>
		<div class="card-body">
			
			@if(count($questions) > 0)
			
				<table class="table table-bordered">
					<thead class="thead-dark">
						<tr>
							<th>Body</th>
							<th colspan="2">Actions</th>
						</tr>
					</thead>
					<tbody class="tbody-light">
						@foreach($questions as $question)

							<tr>
								<td>{{ $question->body }}</td>
								<td>
									<a href="{{ route('questions.edit', $question) }}" class="btn btn-primary btn-sm">Edit</a>
								</td>
								<td>
									{{ Form::open(['action' => ['QuestionController@destroy', $question], 'method' => 'POST']) }}

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
		<a href="{{ route('questions.create') }}" class="btn btn-success">Add Question</a>
	</div>

@endsection