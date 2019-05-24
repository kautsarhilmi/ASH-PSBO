@extends('layouts.app')

@section('content')
	<div class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="modal fade" style="margin-top: 300px;" id="CreateNewHouseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
				    <form method="POST" action="{{ route('create.house') }}">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Create new house</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      	@csrf
				        <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div> 
                            <input id="house-name" type="text" class="form-control{{ $errors->has('house-name') ? ' is-invalid' : '' }}" placeholder="{{ __('House name') }}" name="house-name" value="{{ old('house-name') }}" required autofocus>

                            @if ($errors->has('house-name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('house-name') }}</strong>
                                </span>
                            @endif
                            
                        </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				      	<div class="form-group">
						<input type="submit" value="{{ __('Create') }}" class="btn float-right btn-primary">
                        </div>
				      </div>
				      </form>
				    </div>
				</div>
				</div>
				<div class="col-sm-6 col-md-3 col-lg- p-5-50">
					<div class="leftbar p-r-0 p-r-0-sm">
						<h4 class="m-text14">
						<button type="button" class="btn login_btn1" data-toggle="modal" data-target="#CreateNewHouseModal">{{ __('+ Create New House') }}</button>
						</h4>
						@if ($houses)
						@foreach ($houses as $house)
				
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
						@endforeach
						@else
						@endif
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-lg- p-5-50">
					<!-- untuk detail ruangan -->
				</div>
			</div>
		</div>
	</div>				
@endsection