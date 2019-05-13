@extends('layouts.app')

@section('content')
	<table>
		@foreach ($houses as $house)
			@if ($houses)
				<tr>
	                <td>{{ $house->name }}</td>
				</tr>
			@endif
		@endforeach
	</table>
@endsection