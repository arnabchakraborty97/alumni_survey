@extends('layouts.app')

@section('title')

	@if(isset($survey)) Edit @else Create @endif Survey

@endsection

@section('content')
	
	<div class="card">
		<div class="card-header">@if(isset($survey)) Edit @else Create @endif Survey</div>
		<div class="card-body">
			
			{{ Form::open(['action' => isset($survey)? ['SurveyController@update', $survey]:'SurveyController@store', 'method' => 'POST']) }}

				@foreach($questions as $key => $question) 

					{{ Form::hidden('question[]', $question->id) }}
					{{ Form::label('answer', $question->body) }}
					{{ Form::text('answer[]', isset($survey)? $survey->answers[$key]:'', ['class' => 'form-control']) }}					

				@endforeach

				@if(isset($survey))
					{{ Form::hidden('_method', 'PUT') }}
				@endif

				<div class="text-center">
					{{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
				</div>

			{{ Form::close() }}

		</div>
	</div>

@endsection