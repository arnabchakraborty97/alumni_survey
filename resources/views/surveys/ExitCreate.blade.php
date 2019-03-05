@extends('layouts.app')

@section('title')

	@if(isset($survey)) Edit @else Create @endif Survey

@endsection

@section('content')
	
	<div class="card">
		<div class="card-header">@if(isset($survey)) Edit @else Create @endif Survey</div>
		<div class="card-body">
			
			{{ Form::open(['action' => isset($survey)? ['SurveyController@update', $survey]:'SurveyController@exitStore', 'method' => 'POST']) }}

				{{ Form::hidden('question[]', $questions[0]->id) }}
				{{ Form::label('1', $questions[0]->body, ['class' => 'col-form-label font-weight-bold']) }}
				{{ Form::text('1', isset($survey)? $survey->answers[0]:'', ['class' => 'form-control']) }}	

				{{ Form::hidden('question[]', $questions[1]->id) }}
				{{ Form::label('2', $questions[1]->body, ['class' => 'col-form-label font-weight-bold']) }}
				{{ Form::text('2', isset($survey)? $survey->answers[1]:'', ['class' => 'form-control']) }}	

				{{ Form::hidden('question[]', $questions[2]->id) }}
				{{ Form::label('3', $questions[2]->body, ['class' => 'col-form-label font-weight-bold']) }}
				<select id="3" name="3" class="form-control">
					@foreach($departments as $department)
						<option value="{{ $department->name }}">{{ $department->code }}</option>
					@endforeach
				</select>		

				{{ Form::hidden('question[]', $questions[3]->id) }}
				{{ Form::label('4', $questions[3]->body, ['class' => 'col-form-label font-weight-bold']) }}
				<select id="4" name="4" class="form-control">
					<option value="1990">1990</option>
					<option value="1991">1991</option>
					<option value="1992">1992</option>
					<option value="1993">1993</option>
					<option value="1994">1994</option>
					<option value="1995">1995</option>
					<option value="1996">1996</option>
					<option value="1997">1997</option>
					<option value="1998">1998</option>
					<option value="1999">1999</option>
					<option value="2000">2000</option>
					<option value="2001">2001</option>
					<option value="2002">2002</option>
					<option value="2003">2003</option>
					<option value="2004">2004</option>
					<option value="2005">2005</option>
					<option value="2006">2006</option>
					<option value="2007">2007</option>
					<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
					<option value="2011">2011</option>
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017">2017</option>
					<option value="2018">2018</option>
				</select>		

				{{ Form::hidden('question[]', $questions[4]->id) }}
				{{ Form::label('5', $questions[4]->body, ['class' => 'col-form-label font-weight-bold']) }}
				{{ Form::text('5', isset($survey)? $survey->answers[4]:'', ['class' => 'form-control']) }}

				{{ Form::hidden('question[]', $questions[5]->id) }}
				{{ Form::label('6', $questions[5]->body, ['class' => 'col-form-label font-weight-bold']) }}
				{{ Form::text('6', isset($survey)? $survey->answers[5]:'', ['class' => 'form-control']) }}

				{{ Form::hidden('question[]', $questions[6]->id) }}
				{{ Form::label('7', $questions[6]->body, ['class' => 'col-form-label font-weight-bold']) }}
				{{ Form::email('7', isset($survey)? $survey->answers[6]:'', ['class' => 'form-control']) }}

				<hr>
				{{ Form::hidden('question[]', $questions[8]->id) }}
				{{ Form::label('9', $questions[8]->body, ['class' => 'col-form-label font-weight-bold']) }}<br>
				<input type="radio" name="9" value="Employed">Employed<br>
				<input type="radio" name="9" value="Unemployed">Unemployed<br>
				<input type="radio" name="9" value="Pursuing Higher Education">Eligible For Pursuing Higher Education<br>

				<hr>

				{{ Form::hidden('question[]', $questions[12]->id) }}
				{{ Form::label('13', $questions[12]->body, ['class' => 'col-form-label font-weight-bold']) }}<br>
				<input type="radio" name="13[]" value="Yes">Yes<br>
				<input type="radio" name="13[]" value="No">No<br>
				Specify: <input type="text" name="13[]" class="form-control col-md-3">

				{{ Form::hidden('question[]', $questions[13]->id) }}
				{{ Form::label('14', $questions[13]->body, ['class' => 'col-form-label font-weight-bold']) }}<br>
				<input type="radio" name="14" value=">= 10r">>= 10<br>
				<input type="radio" name="14" value="7 - 9">7 - 9<br>
				<input type="radio" name="14" value="4 - 6">4 - 6<br>
				<input type="radio" name="14" value="1 - 3">1 - 3<br>

				{{ Form::hidden('question[]', $questions[14]->id) }}
				{{ Form::label('15', $questions[14]->body, ['class' => 'col-form-label font-weight-bold']) }}<br>
				<div class="row">
					<div class="col-md-3">
						<input type="checkbox" name="15[]" value="M.E/M.Tech">M.E/M.Tech
					</div>
					<div class="col-md-3">
						Graduation year: <input type="text" name="15[]" class="form-control">
					</div>
					<div class="col-md-3">
						Specialization: <input type="text" name="15[]" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<input type="checkbox" name="15[]" value="M.B.A.">M.B.A.
					</div>
					<div class="col-md-3">
						Graduation year: <input type="text" name="15[]" class="form-control">
					</div>
					<div class="col-md-3">
						Specialization: <input type="text" name="15[]" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<input type="checkbox" name="15[]" value="Ph.D.">Ph.D.
					</div>
					<div class="col-md-3">
						Graduation year: <input type="text" name="15[]" class="form-control">
					</div>
					<div class="col-md-3">
						Specialization: <input type="text" name="15[]" class="form-control">
					</div>
				</div>
				<br>
				<input type="checkbox" name="15[]" value="Not Applicable">Not Applicable<br>

				{{ Form::hidden('question[]', $questions[15]->id) }}
				{{ Form::label('16', $questions[15]->body, ['class' => 'col-form-label font-weight-bold']) }}<br>
				<input type="radio" name="16[]" value="Yes">Yes<br>
				<input type="radio" name="16[]" value="No">No<br>
				Specify: <input type="checkbox" name="16[]" value="GATE">GATE
				<input type="checkbox" name="16[]" value="GRE">GRE
				<input type="checkbox" name="16[]" value="CAT">CAT
				<input type="checkbox" name="16[]" value="TNPSC">TNPSC
				<input type="checkbox" name="16[]" value="DRDO">DRDO
				<input type="checkbox" name="16[]" value="TANCET">TANCET
				<input type="checkbox" name="16[]" value="TOEFL">TOEFL
				<input type="checkbox" name="16[]" value="GMAT">GMAT
				<input type="checkbox" name="16[]" value="UPSCE">UPSCE
				<input type="checkbox" name="16[]" value="ISRO">ISRO<br>
				Others: <input type="text" name="16[]" class="col-md-4 form-control">

				{{ Form::hidden('question[]', $questions[16]->id) }}
				{{ Form::label('17', $questions[16]->body, ['class' => 'col-form-label font-weight-bold']) }}<br>
				<input type="radio" name="17[]" value="Yes">Yes<br>
				<input type="radio" name="17[]" value="No">No<br>
				Specify: <input type="checkbox" name="17[]" value="GATE">GATE
				<input type="checkbox" name="17[]" value="GRE">GRE
				<input type="checkbox" name="17[]" value="CAT">CAT
				<input type="checkbox" name="17[]" value="TNPSC">TNPSC
				<input type="checkbox" name="17[]" value="DRDO">DRDO
				<input type="checkbox" name="17[]" value="TANCET">TANCET
				<input type="checkbox" name="17[]" value="TOEFL">TOEFL
				<input type="checkbox" name="17[]" value="GMAT">GMAT
				<input type="checkbox" name="17[]" value="UPSCE">UPSCE
				<input type="checkbox" name="17[]" value="ISRO">ISRO<br>
				Others: <input type="text" name="17[]" class="col-md-4 form-control">

				<br>

				{{ Form::hidden('question[]', $questions[17]->id) }}
				{{ Form::label('18', $questions[17]->body, ['class' => 'col-form-label font-weight-bold']) }}<br>
				<table class="table table-sm table-bordered">
					<thead class="thead-dark">
						<tr>
							<th></th>
							<th>0</th>
							<th>1 - 3</th>
							<th>4 - 6</th>
							<th>7 - 9</th>
							<th>>= 10</th>
						</tr>
					</thead>
					<tbody class="tbody-light">
						<tr>
							<td>
								<input type="text" name="18[]" value="Publications" class="form-control" readonly>
							</td>
							<td>
								<input type="radio" name="18_1" value="0">
							</td>
							<td>
								<input type="radio" name="18_1" value="1 - 3">
							</td>
							<td>
								<input type="radio" name="18_1" value="4 - 6">
							</td>
							<td>
								<input type="radio" name="18_1" value="7 - 9">
							</td>
							<td>
								<input type="radio" name="18_1" value=">=10">
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" name="18[]" value="Programs attended or served as resource person" class="form-control" readonly>
							</td>
							<td>
								<input type="radio" name="18_2" value="0">
							</td>
							<td>
								<input type="radio" name="18_2" value="1 - 3">
							</td>
							<td>
								<input type="radio" name="18_2" value="4 - 6">
							</td>
							<td>
								<input type="radio" name="18_2" value="7 - 9">
							</td>
							<td>
								<input type="radio" name="18_2" value=">=10">
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" name="18[]" value="Diploma / Certificate courses completed" class="form-control" readonly>
							</td>
							<td>
								<input type="radio" name="18_3" value="0">
							</td>
							<td>
								<input type="radio" name="18_3" value="1 - 3">
							</td>
							<td>
								<input type="radio" name="18_3" value="4 - 6">
							</td>
							<td>
								<input type="radio" name="18_3" value="7 - 9">
							</td>
							<td>
								<input type="radio" name="18_3" value=">=10">
							</td>
						</tr>
					</tbody>
				</table>


				{{ Form::hidden('question[]', $questions[19]->id) }}
				{{ Form::label('20', $questions[19]->body, ['class' => 'col-form-label font-weight-bold']) }}<br>
				<table class="table table-bordered table-sm">
					<thead class="thead-dark">
						<tr>
							<th>Sl No.</th>
							<th><strong class="text-center">Particular</strong></th>
							<th><strong class="text-center">Agree</strong></th>
							<th><strong class="text-center">No opinion</strong></th>
							<th><strong class="text-center">Disagree</strong></th>
						</tr>
					</thead>
					<tbody class="tbody-light">
						<tr>
							<td>1</td>
							<td><input type="text" name="20[]" value="Rejecting a paper / proposal that is harmful to society" class="form-control" readonly></td>
							<td><input type="radio" name="20_1" value="Agree"></td>
							<td><input type="radio" name="20_1" value="No opinion"></td>
							<td><input type="radio" name="20_1" value="Disagree"></td>
						</tr>
						<tr>
							<td>2</td>
							<td><input type="text" name="20[]" value="Sharing experience in ensuring legal compliance" class="form-control" readonly></td>
							<td><input type="radio" name="20_2" value="Agree"></td>
							<td><input type="radio" name="20_2" value="No opinion"></td>
							<td><input type="radio" name="20_2" value="Disagree"></td>
						</tr>
						<tr>
							<td>3</td>
							<td><input type="text" name="20[]" value="Avoiding outside employment / activity(Moon lighting)" class="form-control" readonly></td>
							<td><input type="radio" name="20_3" value="Agree"></td>
							<td><input type="radio" name="20_3" value="No opinion"></td>
							<td><input type="radio" name="20_3" value="Disagree"></td>
						</tr>
						<tr>
							<td>4</td>
							<td><input type="text" name="20[]" value="Refusing bribery / kickback in any form" class="form-control" readonly></td>
							<td><input type="radio" name="20_4" value="Agree"></td>
							<td><input type="radio" name="20_4" value="No opinion"></td>
							<td><input type="radio" name="20_4" value="Disagree"></td>
						</tr>
						<tr>
							<td>5</td>
							<td><input type="text" name="20[]" value="Overcoming technical miscalculations that may result in failure of a system / design / process" class="form-control" readonly></td>
							<td><input type="radio" name="20_5" value="Agree"></td>
							<td><input type="radio" name="20_5" value="No opinion"></td>
							<td><input type="radio" name="20_5" value="Disagree"></td>
						</tr>
						<tr>
							<td>6</td>
							<td><input type="text" name="20[]" value="Not using knowledge and skill for malicious projects" class="form-control" readonly></td>
							<td><input type="radio" name="20_6" value="Agree"></td>
							<td><input type="radio" name="20_6" value="No opinion"></td>
							<td><input type="radio" name="20_6" value="Disagree"></td>
						</tr>
						<tr>
							<td>7</td>
							<td><input type="text" name="20[]" value="Maintaining confidentiality if proprietary information" class="form-control" readonly></td>
							<td><input type="radio" name="20_7" value="Agree"></td>
							<td><input type="radio" name="20_7" value="No opinion"></td>
							<td><input type="radio" name="20_7" value="Disagree"></td>
						</tr>
						<tr>
							<td>8</td>
							<td><input type="text" name="20[]" value="Avoiding unfair competition with others" class="form-control" readonly></td>
							<td><input type="radio" name="20_8" value="Agree"></td>
							<td><input type="radio" name="20_8" value="No opinion"></td>
							<td><input type="radio" name="20_8" value="Disagree"></td>
						</tr>
				</table>

				{{ Form::hidden('question[]', $questions[20]->id) }}
				{{ Form::label('21', $questions[20]->body, ['class' => 'col-form-label font-weight-bold']) }}<br>
				<table class="table table-bordered table-sm">
					<thead class="thead-dark">
						<tr>
							<th></th>
							<th>Strongly Agree</th>
							<th>Agree</th>
							<th>No opinion</th>
							<th>Disagree</th>
						</tr>
					</thead>
					<tbody class="tbody-light">
						<tr>
							<td><input type="text" name="21[]" value="Placement" class="form-control" readonly></td>
							<td><input type="radio" name="21_1" value="Strongly Agree"></td>
							<td><input type="radio" name="21_1" value="Agree"></td>
							<td><input type="radio" name="21_1" value="No opinion"></td>
							<td><input type="radio" name="21_1" value="Disagree"></td>
						</tr>
						<tr>
							<td><input type="text" name="21[]" value="Higher Education" class="form-control" readonly></td>
							<td><input type="radio" name="21_2" value="Strongly Agree"></td>
							<td><input type="radio" name="21_2" value="Agree"></td>
							<td><input type="radio" name="21_2" value="No opinion"></td>
							<td><input type="radio" name="21_2" value="Disagree"></td>
						</tr>
					</tbody>
				</table>

				{{ Form::hidden('question[]', $questions[21]->id) }}
				{{ Form::label('22', $questions[21]->body, ['class' => 'col-form-label font-weight-bold']) }}<br>
				<table class="table table-sm table-bordered">
					<thead class="thead-dark">
						<tr>
							<th></th>
							<th>Agree</th>
							<th>No Opinion</th>
							<th>Disgaree</th>
						</tr>
					</thead>
					<tbody class="tbody-light">
						<tr>
							<td><input type="text" name="22[]" value="Communicate Effectively" class="form-control" readonly></td>
							<td><input type="radio" name="22_1" value="Agree"></td>
							<td><input type="radio" name="22_1" value="No opinion"></td>
							<td><input type="radio" name="22_1" value="Disagree"></td>
						</tr>
						<tr>
							<td><input type="text" name="22[]" value="Function effectively as an individual and as a member / leader in-diverse teams" class="form-control" readonly></td>
							<td><input type="radio" name="22_2" value="Agree"></td>
							<td><input type="radio" name="22_2" value="No opinion"></td>
							<td><input type="radio" name="22_2" value="Disagree"></td>
						</tr>
						<tr>
							<td><input type="text" name="22[]" value="Commit to professional and ethical responsibilities" class="form-control" readonly></td>
							<td><input type="radio" name="22_3" value="Agree"></td>
							<td><input type="radio" name="22_3" value="No opinion"></td>
							<td><input type="radio" name="22_3" value="Disagree"></td>
						</tr>
						<tr>
							<td><input type="text" name="22[]" value="Apply knowledge on mathematics, science and engineering" class="form-control" readonly></td>
							<td><input type="radio" name="22_4" value="Agree"></td>
							<td><input type="radio" name="22_4" value="No opinion"></td>
							<td><input type="radio" name="22_4" value="Disagree"></td>
						</tr>
						<tr>
							<td><input type="text" name="22[]" value="Apply engineering techniques and skills" class="form-control" readonly></td>
							<td><input type="radio" name="22_5" value="Agree"></td>
							<td><input type="radio" name="22_5" value="No opinion"></td>
							<td><input type="radio" name="22_5" value="Disagree"></td>
						</tr>
						<tr>
							<td><input type="text" name="22[]" value="Identify, formulate, and solve problems" class="form-control" readonly></td>
							<td><input type="radio" name="22_6" value="Agree"></td>
							<td><input type="radio" name="22_6" value="No opinion"></td>
							<td><input type="radio" name="22_6" value="Disagree"></td>
						</tr>
						<tr>
							<td><input type="text" name="22[]" value="Conduct investigations and provide valid conclusions" class="form-control" readonly></td>
							<td><input type="radio" name="22_7" value="Agree"></td>
							<td><input type="radio" name="22_7" value="No opinion"></td>
							<td><input type="radio" name="22_7" value="Disagree"></td>
						</tr>
						<tr>
							<td><input type="text" name="22[]" value="Analyze and interpret data" class="form-control" readonly></td>
							<td><input type="radio" name="22_8" value="Agree"></td>
							<td><input type="radio" name="22_8" value="No opinion"></td>
							<td><input type="radio" name="22_8" value="Disagree"></td>
						</tr>
						<tr>
							<td><input type="text" name="22[]" value="Design/ Develop solutions meeting their requirements" class="form-control" readonly></td>
							<td><input type="radio" name="22_9" value="Agree"></td>
							<td><input type="radio" name="22_9" value="No opinion"></td>
							<td><input type="radio" name="22_9" value="Disagree"></td>
						</tr>
						<tr>
							<td><input type="text" name="22[]" value="Understand societal impact of engineering solutions and issues" class="form-control" readonly></td>
							<td><input type="radio" name="22_10" value="Agree"></td>
							<td><input type="radio" name="22_10" value="No opinion"></td>
							<td><input type="radio" name="22_10" value="Disagree"></td>
						</tr>
						<tr>
							<td><input type="text" name="22[]" value="Use modern engineering equipment, software, tools or technology for design and development" class="form-control" readonly></td>
							<td><input type="radio" name="22_11" value="Agree"></td>
							<td><input type="radio" name="22_11" value="No opinion"></td>
							<td><input type="radio" name="22_11" value="Disagree"></td>
						</tr>
						<tr>
							<td><input type="text" name="22[]" value="Recognise the need for life long learning and stay relevant in the profession" class="form-control" readonly></td>
							<td><input type="radio" name="22_12" value="Agree"></td>
							<td><input type="radio" name="22_12" value="No opinion"></td>
							<td><input type="radio" name="22_12" value="Disagree"></td>
						</tr>
					</tbody>
				</table>

				{{ Form::hidden('question[]', $questions[22]->id) }}
				{{ Form::label('23', $questions[22]->body, ['class' => 'col-form-label font-weight-bold']) }}<br>
				<table class="table table-bordered table-sm">
					<thead class="thead-dark">
						<tr>
							<th></th>
							<th>Suggestion</th>
						</tr>
					</thead>
					<tbody class="tbody-light">
						<tr>
							<td><input type="text" name="23[]" value="Lecture" class="form-control" readonly></td>
							<td><input type="text" name="23_1" class="form-control"></td>
						</tr>
						<tr>
							<td><input type="text" name="23[]" value="Practical" class="form-control" readonly></td>
							<td><input type="text" name="23_2" class="form-control"></td>
						</tr>
						<tr>
							<td><input type="text" name="23[]" value="Assignment" class="form-control" readonly></td>
							<td><input type="text" name="23_3" class="form-control"></td>
						</tr>
						<tr>
							<td><input type="text" name="23[]" value="Tutorial" class="form-control" readonly></td>
							<td><input type="text" name="23_4" class="form-control"></td>
						</tr>
					</tbody>
				</table>

				{{ Form::hidden('question[]', $questions[23]->id) }}
				{{ Form::label('24', $questions[23]->body, ['class' => 'col-form-label font-weight-bold']) }}<br>
				<table class="table table-bordered table-sm">
					<thead class="thead-dark">
						<tr>
							<th>Sl No.</th>
							<th>Additional Courses</th>
							<th>Strengthened(Additional Topics in Syllabi)</th>
						</tr>
					</thead>
					<tbody class="tbody-light">
						<tr>
							<td>1</td>
							<td>{{ Form::text('24_1[]', '', ['class' => 'form-control']) }}</td>
							<td>{{ Form::text('24_1[]', '', ['class' => 'form-control']) }}</td>
						</tr>
						<tr>
							<td>2</td>
							<td>{{ Form::text('24_2[]', '', ['class' => 'form-control']) }}</td>
							<td>{{ Form::text('24_2[]', '', ['class' => 'form-control']) }}</td>
						</tr>
						<tr>
							<td>3</td>
							<td>{{ Form::text('24_3[]', '', ['class' => 'form-control']) }}</td>
							<td>{{ Form::text('24_3[]', '', ['class' => 'form-control']) }}</td>
						</tr>
					</tbody>
				</table>

				{{ Form::hidden('question[]', $questions[24]->id) }}
				{{ Form::label('25', $questions[24]->body, ['class' => 'col-form-label font-weight-bold']) }}<br>
				<table class="table table-bordered table-sm">
					<thead class="thead-dark">
						<tr>
							<th>Sl No.</th>
							<th>Additional Courses</th>
							<th>Strengthened(Additional Experiments)</th>
						</tr>
					</thead>
					<tbody class="tbody-light">
						<tr>
							<td>1</td>
							<td>{{ Form::text('25_1[]', '', ['class' => 'form-control']) }}</td>
							<td>{{ Form::text('25_1[]', '', ['class' => 'form-control']) }}</td>
						</tr>
						<tr>
							<td>2</td>
							<td>{{ Form::text('25_2[]', '', ['class' => 'form-control']) }}</td>
							<td>{{ Form::text('25_2[]', '', ['class' => 'form-control']) }}</td>
						</tr>
						<tr>
							<td>3</td>
							<td>{{ Form::text('25_3[]', '', ['class' => 'form-control']) }}</td>
							<td>{{ Form::text('25_3[]', '', ['class' => 'form-control']) }}</td>
						</tr>
					</tbody>
				</table>


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