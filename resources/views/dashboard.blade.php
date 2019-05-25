@extends('layouts.app')

@section('content')
	<div class="bgwhite p-t-55 p-b-65">
		<div class="container">
					<div class="leftbar p-r-0 p-r-0-sm">
						<h4 class="m-text14">
						<button type="button" class="btn login_btn1" data-toggle="modal" data-target="#CreateNewHouseModal">{{ __('+ Create New House') }}</button>
						</h4>
						@if ($houses)
						@foreach ($houses as $house)


						<div class="modal fade" style="margin-top: 100px;" id="CreateNewRoomModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
						    <form method="POST" action="{{ route('room.store') }}">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Create new room</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						      	@csrf
						        <div class="input-group form-group">
		                            <input id="room_name" type="text" class="form-control{{ $errors->has('room_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Room name') }}" name="room_name" value="{{ old('room_name') }}" required autofocus>

		                            @if ($errors->has('room_name'))
		                                <span class="invalid-feedback" role="alert">
		                                    <strong>{{ $errors->first('room_name') }}</strong>
		                                </span>
		                            @endif
		                        </div>
		                        <div class="input-group form-group">
		                            <input id="room_width" type="number" class="form-control{{ $errors->has('room_width') ? ' is-invalid' : '' }}" placeholder="{{ __('Width') }}" name="room_width" value="{{ old('room_width') }}" required autofocus>

		                            @if ($errors->has('room_width'))
		                                <span class="invalid-feedback" role="alert">
		                                    <strong>{{ $errors->first('room_width') }}</strong>
		                                </span>
		                            @endif
		                            
		                        </div>
		                        <div class="input-group form-group">
		                            <input id="room_length" type="number" class="form-control{{ $errors->has('room_length') ? ' is-invalid' : '' }}" placeholder="{{ __('Room Length') }}" name="room_length" value="{{ old('room_length') }}" required autofocus>

		                            @if ($errors->has('room_length'))
		                                <span class="invalid-feedback" role="alert">
		                                    <strong>{{ $errors->first('room_length') }}</strong>
		                                </span>
		                            @endif
		                        </div>
		                        <div class="input-group form-group">
		                            <input id="room_height" type="number" class="form-control{{ $errors->has('room_height') ? ' is-invalid' : '' }}" placeholder="{{ __('Room Height') }}" name="room_height" value="{{ old('room_height') }}" required autofocus>

		                            @if ($errors->has('room_height'))
		                                <span class="invalid-feedback" role="alert">
		                                    <strong>{{ $errors->first('room_height') }}</strong>
		                                </span>
		                            @endif
		                        </div>
		                        <div class="input-group form-group">
		                            <label for="tag_id">Select tag:</label>
								      <select class="form-control" id="tag_id" name="tag_id">
								      	@foreach ($tags as $tag)
								      		<option value="{{ $tag->id }}">{{ $tag->name }}</option>
								      	@endforeach
								      </select>
		                        </div>
		                        <div class="input-group form-group">
		                            <input id="house_id" name="house_id" value="{{ $house->id }}" hidden>
		                        </div>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						      	<div class="form-group">
								<input type="submit" value="{{ __('Create') }}" class="btn float-right btn-primary">
		                        </div>
						      </div>
						  	  </div>
						      </form>
						    </div>
							</div>


						<button class="dropdown-btn btn-sm m-text14">{{ $house->name }}
							<i class="fa fa-caret-down"></i>
						</button>
						<!-- <h4 class="m-text14">
							{{ $house->name }}
						</h4> -->

						<!-- list ruangan -->
						<div class="dropdown-container">
							<h4 class="m-text14">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CreateNewRoomModal">{{ __('+ Create New Room') }}</button>
							</h4>
							<ul class="p-b-30">
							@foreach ($house->rooms as $room)
							<li class="p-t-2">
							<button class="dropdown-btn btn-sm m-text15">&nbsp &nbsp &nbsp {{$room->name}}
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-2 text-center">
											<img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120" height="80">
							</div>
							<div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
									<h4 class="product-name"><strong>Product Name</strong></h4>
									<h4>
											<small>Product description</small>
									</h4>
							</div>
							<div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
									<div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
											<h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
									</div>
									<div class="col-4 col-sm-4 col-md-4">
											<div class="quantity">
													<input type="button" value="+" class="plus">
													<input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
																	size="4">
													<input type="button" value="-" class="minus">
											</div>
									</div>
									<div class="col-2 col-sm-2 col-md-2 text-right">
											<button type="button" class="btn btn-outline-danger btn-xs">
													<i class="fa fa-trash" aria-hidden="true"></i>
											</button>
									</div>
							</div>
					</div>
					<hr>
						</div>
							</li>
							@endforeach
							</ul>
						</div>
						@endforeach
						@else
						@endif
					</div>
					
				
			
			
				<div class="modal fade" style="margin-top: 300px;" id="CreateNewHouseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
				    <form method="POST" action="{{ route('house.store') }}">
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
                            <input id="house_name" type="text" class="form-control{{ $errors->has('house_name') ? ' is-invalid' : '' }}" placeholder="{{ __('House name') }}" name="house_name" value="{{ old('house_name') }}" required autofocus>

                            @if ($errors->has('house_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('house_name') }}</strong>
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
				  	  </div>
				      </form>
				    </div>
				</div>

				
		</div>
	</div>				
@endsection