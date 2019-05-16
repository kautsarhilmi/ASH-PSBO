@extends('layouts.app')

@section('content')
	<table>
		@guest

		@else
			@if ($houses)
				@foreach ($houses as $house)
					<tr>
	            	    <td>{{ $house->name }}</td>
	            	    @foreach( {{$house->rooms as $room}} )
	            	    	$room->name
	            	    	@endforeach
					</tr>
				@endforeach
			@else
			@endif
		@endguest
	</table>
@endsection