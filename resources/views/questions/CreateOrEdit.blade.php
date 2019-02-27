@extends('layouts.app')

@section('title')

	@if(isset($question)) Edit @else Create @endif Question

@endsection

@section('content')

	<div class="card">
		<div class="card-header">
			@if(isset($question)) Edit @else Create @endif Question
		</div>
		<div class="card-body">
			
			{{ Form::open(['action' => isset($question)?['QuestionController@update', $question->id]:'QuestionController@store', 'method' => 'POST']) }}

				{{ Form::label('body', 'Body') }}
				{{ Form::textarea('body', isset($question)? $question->body: '', ['class' => 'form-control']) }}

				<br>

				@if(isset($question))
					{{ Form::hidden('_method', 'PUT') }}
				@endif

				<div class="text-center">
					{{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
				</div>

			{{ Form::close() }}

		</div>
	</div>

@endsection