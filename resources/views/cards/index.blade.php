@extends('layout')

@section('content')
	<h1>All Cards</h1>

	@foreach($cards as $card)
		<div>
		{{ $card->id}}
		{{ $card->name}}
		</div>
	@endforeach
@stop