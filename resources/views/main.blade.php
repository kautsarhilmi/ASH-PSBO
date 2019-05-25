@extends('layouts.app')

@section('content')
<div class="bg-title-page p-t-40 p-b-40 flex-col-c-m" style="background-image: url(images/Banner.png);">
		<h2 class="l-text2 t-center">
			Make Your Own Room!
		</h2>
		<p class="m-text13 t-center">
		we will provide the best product recommendation for you
		</p>
</div>

	<div class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<h4 class="m-text14 p-b-7">
							Categories
						</h4>

						<ul class="p-b-54">
							@foreach($tags as $tag)
							<li class="p-t-4">
								<a href="#" class="s-text13 active1">
									{{$tag->name}}
								</a>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
					<h4 class="m-text14 p-b-7">
						Furnitur
					</h4>
					</div>
					<!-- Product -->
					
					<div class="row">
						@if ($furnitures)
						@foreach($furnitures as $furniture)


						<div class="modal fade" style="margin-top: 100px;" id="AddFurnitureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
						    <form method="POST" action="{{ route('room.add.furniture') }}">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Add furniture</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						      	@csrf
		                        <div class="input-group form-group">
		                            <label for="house_id">Select house:</label>
								      <select class="form-control" id="house_id" name="house_id">
								      	@foreach ($houses as $house)
								      		<option value="{{ $house->id }}">{{ $house->name }}</option>
								      	@endforeach
								      </select>
		                        </div>
		                        <div class="input-group form-group">
		                            <label for="room_id">Select room:</label>
								      <select class="form-control" id="room_id" name="room_id">
								      </select>
		                        </div>
		                        <div class="input-group form-group">
		                        	<label for="quantity">Quantity:</label>
		                            <input id="quantity" name="quantity" type="number" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" placeholder="{{ __('Quantity') }}" name="quantity" value="{{ old('quantity') }}" required autofocus>

		                            @if ($errors->has('quantity'))
		                                <span class="invalid-feedback" role="alert">
		                                    <strong>{{ $errors->first('quantity') }}</strong>
		                                </span>
		                            @endif
		                        </div>
		                        <div class="input-group form-group">
								      <input id="furniture_id" name="furniture_id" value="{{ $furniture->id }}" hidden>
		                        </div>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						      	<div class="form-group">
								<input type="submit" value="{{ __('Add') }}" class="btn float-right btn-primary">
		                        </div>
						      </div>
						  	  </div>
						      </form>
						    </div>
							</div>


						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="images/p2.png" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" data-toggle="modal" data-target="#AddFurnitureModal">
												Add to Cart
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
										{{$furniture->name}}
									</a>

									<span class="block2-price m-text6 p-r-5">
										{{$furniture->price}}
									</span>
								</div>
							</div>
						</div>
						@endforeach
						@else
						@endif
					</div>
				</div>

				

			</div>	
		</div>	
	</div>
</div>

<script type='text/javascript'>
	// House Change
      $('#house_id').change(function(){

         // House id
         var id = $(this).val();

         // Empty the dropdown
         $('#room_id').find('option').not(':first').remove();

         // AJAX request 
         $.ajax({
           url: 'getRooms/'+id,
           type: 'get',
           dataType: 'json',
           success: function(response){

             var len = 0;
             if(response['data'] != null){
               len = response['data'].length;
             }

             if(len > 0){
               // Read data and create <option >
               for(var i=0; i<len; i++){

                 var id = response['data'][i].id;
                 var name = response['data'][i].name;

                 var option = "<option value='"+id+"'>"+name+"</option>"; 

                 $("#room_id").append(option); 
               }
             }

           }
        });
      });
</script>
@endsection