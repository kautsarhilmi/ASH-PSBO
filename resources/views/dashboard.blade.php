@extends('layouts.app')

@section('content')
		@if ($houses)
	<div class="bgwhite p-t-55 p-b-65">
		<div class="container">
		<h4 class="m-text14">
		<input type="button" value="{{ __('+ Create New House') }}" class="btn login_btn1">
		</h4>
		@foreach ($houses as $house)
			<div class="row">
				<div class="col-sm-6 col-md-3 col-lg- p-5-50">
					<div class="leftbar p-r-0 p-r-0-sm">
						
								<button class="dropdown-btn btn-sm m-text14">{{ $house->name }}
   								<i class="fa fa-caret-down"></i>
  								</button>
								<!-- <h4 class="m-text14">
									{{ $house->name }}
								</h4> -->

								<!-- list ruangan -->
							<div class="dropdown-container">
								<ul class="p-b-30">
								@foreach ($house->rooms as $room)
								<li class="p-t-2">
									<a href="#" class="s-text13 active1">
										&nbsp &nbsp &nbsp {{$room->name}}
									</a>
								</li>
								@endforeach
								</ul> 
							</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>				
			@else
			@endif
			
		

		
@endsection