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
			@for($i = 0; $i < 6; $i++)

				<tr>
					<td width="50%">{{ $answers[$i]->question->body }}</td>
					<td width="50%">{{ $answers[$i]->body }}</td>
				</tr>

			@endfor


		</tbody>
	</table>

@endsection