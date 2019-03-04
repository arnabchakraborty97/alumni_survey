@extends('layouts.app')

@section('title')
	
	Survey details

@endsection

@section('content')

	<table class="table table-bordered">
		<thead class="thead-dark">
			<tr>
				<th>Question</th>
				<th>Answer</th>
			</tr>
		</thead>
		<tbody class="tbody-light">
			@for($i = 0; $i < 14; $i++)

				<tr>
					<td width="50%">{{ $questions[$i]->body }}</td>
					<td width="50%">{{ $answers[$i]->body }}</td>
				</tr>

			@endfor

			<tr>
				<td>{{ $questions[14]->body }}</td>
				<td>
					@if(isset(explode(',', $answers[14]->body)[0]))<strong>{!! explode(',', $answers[14]->body)[0] !!}</strong><br>@endif
					@if(isset(explode(',', $answers[14]->body)[1]))Graduation Year: {!! explode(',', $answers[14]->body)[1] !!}<br>@endif
					@if(isset(explode(',', $answers[14]->body)[2]))Specialization: {!! explode(',', $answers[14]->body)[2] !!}<br>@endif
					@if(isset(explode(',', $answers[14]->body)[3]))<strong>{!! explode(',', $answers[14]->body)[3] !!}</strong><br>@endif
					@if(isset(explode(',', $answers[14]->body)[4]))Graduation Year: {!! explode(',', $answers[14]->body)[4] !!}<br>@endif
					@if(isset(explode(',', $answers[14]->body)[5]))Specialization: {!! explode(',', $answers[14]->body)[5] !!}<br>@endif
					@if(isset(explode(',', $answers[14]->body)[6]))<strong>{!! explode(',', $answers[14]->body)[6] !!}</strong><br>@endif
					@if(isset(explode(',', $answers[14]->body)[7]))Graduation Year: {!! explode(',', $answers[14]->body)[7] !!}<br>@endif
					@if(isset(explode(',', $answers[14]->body)[8]))Specialization: {!! explode(',', $answers[14]->body)[8] !!}<br>@endif
			</td>
			</tr>

			@for($i = 15; $i < 17; $i++)

				<tr>
					<td>{{ $questions[$i]->body }}</td>
					<td>{{ $answers[$i]->body }}</td>
				</tr>

			@endfor

			<tr>
				<td>{{ $questions[17]->body }}</td>
				<td>
					{{ explode(',', $answers[17]->body)[0] }}<br>
					{{ explode(',', $answers[17]->body)[1] }}<br>
					{{ explode(',', $answers[17]->body)[2] }}
				</td>
			</tr>

			<tr>
				<td>{{ $questions[18]->body }}</td>
				<td>
					{{ explode(',', $answers[18]->body)[0] }}<br>
					{{ explode(',', $answers[18]->body)[1] }}<br>
					{{ explode(',', $answers[18]->body)[2] }}<br>
					{{ explode(',', $answers[18]->body)[3] }}<br>
					{{ explode(',', $answers[18]->body)[4] }}<br>
					{{ explode(',', $answers[18]->body)[5] }}<br>
					{{ explode(',', $answers[18]->body)[6] }}<br>
					{{ explode(',', $answers[18]->body)[7] }}<br>
					{{ explode(',', $answers[18]->body)[8] }}
				</td>
			</tr>

			<tr>
				<td>{{ $questions[19]->body }}</td>
				<td>
					{{ explode(',', $answers[19]->body)[0] }}<br>
					{{ explode(',', $answers[19]->body)[1] }}<br>
					{{ explode(',', $answers[19]->body)[2] }}<br>
					{{ explode(',', $answers[19]->body)[3] }}<br>
					{{ explode(',', $answers[19]->body)[4] }}<br>
					{{ explode(',', $answers[19]->body)[5] }}<br>
					{{ explode(',', $answers[19]->body)[6] }}<br>
					{{ explode(',', $answers[19]->body)[7] }}
				</td>
			</tr>

			<tr>
				<td>{{ $questions[20]->body }}</td>
				<td>
					{{ explode(',', $answers[20]->body)[0] }}<br>
					{{ explode(',', $answers[20]->body)[1] }}
				</td>
			</tr>

			<tr>
				<td>{{ $questions[21]->body }}</td>
				<td>
					{{ explode(',', $answers[21]->body)[0] }}<br>
					{{ explode(',', $answers[21]->body)[1] }}<br>
					{{ explode(',', $answers[21]->body)[2] }}<br>
					{{ explode(',', $answers[21]->body)[3] }}<br>
					{{ explode(',', $answers[21]->body)[4] }}<br>
					{{ explode(',', $answers[21]->body)[5] }}<br>
					{{ explode(',', $answers[21]->body)[6] }}
					{{ explode(',', $answers[21]->body)[7] }}
					{{ explode(',', $answers[21]->body)[8] }}<br>
					{{ explode(',', $answers[21]->body)[9] }}<br>
					{{ explode(',', $answers[21]->body)[10] }}<br>
					{{ explode(',', $answers[21]->body)[11] }}<br>
					{{ explode(',', $answers[21]->body)[12] }}<br>
					{{ explode(',', $answers[21]->body)[13] }}
					{{ explode(',', $answers[21]->body)[14] }}
					{{ explode(',', $answers[21]->body)[15] }}<br>
					{{ explode(',', $answers[21]->body)[16] }}<br>
				</td>
			</tr>

			<tr>
				<td>{{ $questions[22]->body }}</td>
				<td>
					{{ explode(',', $answers[22]->body)[0] }}<br>
					{{ explode(',', $answers[22]->body)[1] }}<br>
					{{ explode(',', $answers[22]->body)[2] }}<br>
					{{ explode(',', $answers[22]->body)[3] }}
				</td>
			</tr>

			<tr>
				<td>{{ $questions[23]->body }}</td>
				<td>
					<table class="table table-bordered table-sm">
						<thead class="thead-dark">
							<tr>
								<th>Sl No.</th>
								<th>Additional Course</th>
								<th>Strengthened(Addtional Topics in Syllabi)</th>
							</tr>
						</thead>
						<tbody class="tbody-light">
							<tr>
								<td>1</td>
								<td>{{ explode(',', $answers[23]->body)[0] }}</td>
								<td>{{ explode(',', $answers[23]->body)[1] }}</td>
							</tr>
							<tr>
								<td>2</td>
								<td>{{ explode(',', $answers[23]->body)[2] }}</td>
								<td>{{ explode(',', $answers[23]->body)[3] }}</td>
							</tr>
							<tr>
								<td>3</td>
								<td>{{ explode(',', $answers[23]->body)[4] }}</td>
								<td>{{ explode(',', $answers[23]->body)[5] }}</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>

			<tr>
				<td>{{ $questions[24]->body }}</td>
				<td>
					<table class="table table-bordered table-sm">
						<thead class="thead-dark">
							<tr>
								<th>Sl No.</th>
								<th>Additional Course</th>
								<th>Strengthened(Addtional Experiments)</th>
							</tr>
						</thead>
						<tbody class="tbody-light">
							<tr>
								<td>1</td>
								<td>{{ explode(',', $answers[24]->body)[0] }}</td>
								<td>{{ explode(',', $answers[24]->body)[1] }}</td>
							</tr>
							<tr>
								<td>2</td>
								<td>{{ explode(',', $answers[24]->body)[2] }}</td>
								<td>{{ explode(',', $answers[24]->body)[3] }}</td>
							</tr>
							<tr>
								<td>3</td>
								<td>{{ explode(',', $answers[24]->body)[4] }}</td>
								<td>{{ explode(',', $answers[24]->body)[5] }}</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>

			<tr>
				<td>{{ $questions[25]->body }}</td>
				<td>{{ $answers[25]->body }}</td>
			</tr>

		</tbody>
	</table>

@endsection