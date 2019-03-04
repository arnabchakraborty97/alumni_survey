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
			@for($i = 0; $i < 10; $i++)

				<tr>
					<td width="50%">{{ $answers[$i]->question->body }}</td>
					<td width="50%">{{ $answers[$i]->body }}</td>
				</tr>

			@endfor

			<tr>
				<td>{{ $answers[10]->question->body }}</td>
				<td>
					@if(isset(explode(',', $answers[10]->body)[0]))<strong>{!! explode(',', $answers[10]->body)[0] !!}</strong><br>@endif
					@if(isset(explode(',', $answers[10]->body)[1]))Graduation Year: {!! explode(',', $answers[10]->body)[1] !!}<br>@endif
					@if(isset(explode(',', $answers[10]->body)[2]))Specialization: {!! explode(',', $answers[10]->body)[2] !!}<br>@endif
					@if(isset(explode(',', $answers[10]->body)[3]))<strong>{!! explode(',', $answers[10]->body)[3] !!}</strong><br>@endif
					@if(isset(explode(',', $answers[10]->body)[4]))Graduation Year: {!! explode(',', $answers[10]->body)[4] !!}<br>@endif
					@if(isset(explode(',', $answers[10]->body)[5]))Specialization: {!! explode(',', $answers[10]->body)[5] !!}<br>@endif
					@if(isset(explode(',', $answers[10]->body)[6]))<strong>{!! explode(',', $answers[10]->body)[6] !!}</strong><br>@endif
					@if(isset(explode(',', $answers[10]->body)[7]))Graduation Year: {!! explode(',', $answers[10]->body)[7] !!}<br>@endif
					@if(isset(explode(',', $answers[10]->body)[8]))Specialization: {!! explode(',', $answers[10]->body)[8] !!}<br>@endif
			</td>
			</tr>

			@for($i = 11; $i < 13; $i++)

				<tr>
					<td>{{ $answers[$i]->question->body }}</td>
					<td>{{ $answers[$i]->body }}</td>
				</tr>

			@endfor

			<tr>
				<td>{{ $answers[13]->question->body }}</td>
				<td>
					{{ explode(',', $answers[13]->body)[0] }}<br>
					{{ explode(',', $answers[13]->body)[1] }}<br>
					{{ explode(',', $answers[13]->body)[2] }}
				</td>
			</tr>

			{{-- <tr>
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
			</tr> --}}

			<tr>
				<td>{{ $answers[14]->question->body }}</td>
				<td>
					{{ explode(',', $answers[14]->body)[0] }}<br>
					{{ explode(',', $answers[14]->body)[1] }}<br>
					{{ explode(',', $answers[14]->body)[2] }}<br>
					{{ explode(',', $answers[14]->body)[3] }}<br>
					{{ explode(',', $answers[14]->body)[4] }}<br>
					{{ explode(',', $answers[14]->body)[5] }}<br>
					{{ explode(',', $answers[14]->body)[6] }}<br>
					{{ explode(',', $answers[14]->body)[7] }}
				</td>
			</tr>

			<tr>
				<td>{{ $answers[15]->question->body }}</td>
				<td>
					{{ explode(',', $answers[15]->body)[0] }}<br>
					{{ explode(',', $answers[15]->body)[1] }}
				</td>
			</tr>

			<tr>
				<td>{{ $answers[16]->question->body }}</td>
				<td>
					{{ explode(',', $answers[16]->body)[0] }}<br>
					{{ explode(',', $answers[16]->body)[1] }}<br>
					{{ explode(',', $answers[16]->body)[2] }}<br>
					{{ explode(',', $answers[16]->body)[3] }}<br>
					{{ explode(',', $answers[16]->body)[4] }}<br>
					{{ explode(',', $answers[16]->body)[5] }}<br>
					{{ explode(',', $answers[16]->body)[6] }}
					{{ explode(',', $answers[16]->body)[7] }}
					{{ explode(',', $answers[16]->body)[8] }}<br>
					{{ explode(',', $answers[16]->body)[9] }}<br>
					{{ explode(',', $answers[16]->body)[10] }}<br>
					{{ explode(',', $answers[16]->body)[11] }}<br>
					{{ explode(',', $answers[16]->body)[12] }}<br>
					{{ explode(',', $answers[16]->body)[13] }}
					{{ explode(',', $answers[16]->body)[14] }}
					{{ explode(',', $answers[16]->body)[15] }}<br>
					{{ explode(',', $answers[16]->body)[16] }}<br>
				</td>
			</tr>

			<tr>
				<td>{{ $answers[17]->question->body }}</td>
				<td>
					{{ explode(',', $answers[17]->body)[0] }}<br>
					{{ explode(',', $answers[17]->body)[1] }}<br>
					{{ explode(',', $answers[17]->body)[2] }}<br>
					{{ explode(',', $answers[17]->body)[3] }}
				</td>
			</tr>

			<tr>
				<td>{{ $answers[18]->question->body }}</td>
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
								<td>{{ explode(',', $answers[18]->body)[0] }}</td>
								<td>{{ explode(',', $answers[18]->body)[1] }}</td>
							</tr>
							<tr>
								<td>2</td>
								<td>{{ explode(',', $answers[18]->body)[2] }}</td>
								<td>{{ explode(',', $answers[18]->body)[3] }}</td>
							</tr>
							<tr>
								<td>3</td>
								<td>{{ explode(',', $answers[18]->body)[4] }}</td>
								<td>{{ explode(',', $answers[18]->body)[5] }}</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>

			<tr>
				<td>{{ $answers[19]->question->body }}</td>
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
								<td>{{ explode(',', $answers[19]->body)[0] }}</td>
								<td>{{ explode(',', $answers[19]->body)[1] }}</td>
							</tr>
							<tr>
								<td>2</td>
								<td>{{ explode(',', $answers[19]->body)[2] }}</td>
								<td>{{ explode(',', $answers[19]->body)[3] }}</td>
							</tr>
							<tr>
								<td>3</td>
								<td>{{ explode(',', $answers[19]->body)[4] }}</td>
								<td>{{ explode(',', $answers[19]->body)[5] }}</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr> 

		</tbody>
	</table>

@endsection