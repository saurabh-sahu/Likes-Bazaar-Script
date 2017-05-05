@extends('layout')

@section('content')
	<h1>{{ $note->body}}</h1>
		<form method="POST"  action="http://localhost/Laravel/public/notes/{{ $note->id }}">
			<input type="hidden" name="_method" value="PATCH">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<textarea name="body" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Edit Note </button>
				</div>
			
		</form>
@stop