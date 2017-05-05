@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offseet-3">
			<h1>{{$card->name}}</h1>
			<ul class="list-group">
				@foreach($card->notes as $note)
					<div>
						<li class="list-group-item">{{ $note->id}}</li>	
						<li class="list-group-item">{{ $note->body}}</li>	
						
					</div>
				@endforeach
			</ul>

			<h2>Add a new Note</h2>
			<form method="POST"  action="{{ $card->id }}/notes">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<textarea name="body" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add Note </button>
				</div>
			</form>
		</div>
	</div>
@stop