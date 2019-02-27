@extends('layouts.app')

@section('title')

	@if(isset($survey)) Edit @else Create @endif Survey

@endsection

@section('content')
	
	<div class="card">
		<div class="card-header">@if(isset($survey)) Edit @else Create @endif Survey</div>
		<div class="card-body">
			
			{{ Form::open(['action' => isset($survey)? ['SurveyController@update', $survey]:'SurveyController@store', 'method' => 'POST']) }}

				{{ Form::hidden('question[]', $questions[0]->id) }}
				{{ Form::label('answer', $questions[0]->body, ['class' => 'col-form-label']) }}
				{{ Form::text('answer[]', isset($survey)? $survey->answers[0]:'', ['class' => 'form-control']) }}	

				{{ Form::hidden('question[]', $questions[1]->id) }}
				{{ Form::label('answer', $questions[1]->body, ['class' => 'col-form-label']) }}
				{{ Form::text('answer[]', isset($survey)? $survey->answers[1]:'', ['class' => 'form-control']) }}	

				{{ Form::hidden('question[]', $questions[2]->id) }}
				{{ Form::label('answer', $questions[2]->body, ['class' => 'col-form-label']) }}
				<select id="answer" name="answer[]" class="form-control">
					@foreach($departments as $department)
						<option value="{{ $department->name }}">{{ $department->code }}</option>
					@endforeach
				</select>		

				{{ Form::hidden('question[]', $questions[3]->id) }}
				{{ Form::label('answer', $questions[3]->body, ['class' => 'col-form-label']) }}
				<select id="answer" name="answer[]" class="form-control">
					<option value="1998">1990</option>
					<option value="1998">1991</option>
					<option value="1998">1992</option>
					<option value="1998">1993</option>
					<option value="1998">1994</option>
					<option value="1998">1995</option>
					<option value="1998">1996</option>
					<option value="1998">1997</option>
					<option value="1998">1998</option>
					<option value="1998">1999</option>
					<option value="1998">2000</option>
					<option value="1998">2001</option>
					<option value="1998">2002</option>
					<option value="1998">2003</option>
					<option value="1998">2004</option>
					<option value="1998">2005</option>
					<option value="1998">2006</option>
				</select>		

				{{ Form::hidden('question[]', $questions[4]->id) }}
				{{ Form::label('answer', $questions[4]->body, ['class' => 'col-form-label']) }}
				{{ Form::text('answer[]', isset($survey)? $survey->answers[4]:'', ['class' => 'form-control']) }}

				{{ Form::hidden('question[]', $questions[5]->id) }}
				{{ Form::label('answer', $questions[5]->body, ['class' => 'col-form-label']) }}
				{{ Form::text('answer[]', isset($survey)? $survey->answers[5]:'', ['class' => 'form-control']) }}

				{{ Form::hidden('question[]', $questions[6]->id) }}
				{{ Form::label('answer', $questions[6]->body, ['class' => 'col-form-label']) }}
				{{ Form::email('answer[]', isset($survey)? $survey->answers[6]:'', ['class' => 'form-control']) }}

				{{ Form::hidden('question[]', $questions[7]->id) }}
				{{ Form::label('answer', $questions[7]->body, ['class' => 'col-form-label']) }}
				{{ Form::text('answer[]', isset($survey)? $survey->answers[7]:'', ['class' => 'form-control']) }}

				<hr>
				{{ Form::hidden('question[]', $questions[8]->id) }}
				{{ Form::label('answer', $questions[8]->body, ['class' => 'col-form-label']) }}<br>
				<input type="radio" name="answer[]" value="Employed">Employed<br>
				<input type="radio" name="answer[]" value="Government">Government<br>
				<input type="radio" name="answer[]" value="Private Sector">Private Sector<br>
				<input type="radio" name="answer[]" value="Self-employed">Self-employed<br>
				<input type="radio" name="answer[]" value="Unemployed">Unemployed<br>
				<input type="radio" name="answer[]" value="Pursuing Higher Education">Pursuing Higher Education<br>
				<input type="radio" name="answer[]" value="Doing Certificate Courses">Doing Certificate Courses<br>
				<input type="radio" name="answer[]" value="Undergoing Training">Undergoing Training<br>

				<hr>
				
				{{ Form::hidden('question[]', $questions[9]->id) }}
				{{ Form::label('answer', $questions[9]->body, ['class' => 'col-form-label']) }}<br>
				<input type="radio" name="answer[]" value="Just Before Graduation">Just Before Graduation<br>
				<input type="radio" name="answer[]" value="< 6 months after graduation">< 6 months after graduation<br>
				<input type="radio" name="answer[]" value="6 months to 1 year after graduation">6 months to 1 year after graduation<br>
				<input type="radio" name="answer[]" value="> 1 year of graduation">> 1 year of graduation<br>

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