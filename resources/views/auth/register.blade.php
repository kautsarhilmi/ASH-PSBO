@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center h-100">
            <div class="card1">
                <div class="card-header">
                    <h3>{{ __('Register') }}</h3>
                    <div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="input-group form-group">
						<div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div> 
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="input-group form-group">
						    <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope-square"></i></span>
                            </div>        
                                <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="input-group form-group">
						    <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-home"></i></span>
                            </div>        
                                <input id="address" type="address" placeholder="{{ __('House Address') }}" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="input-group form-group">
						    <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>        
                                <input id="phone" type="phone" placeholder="{{ __('Phone Number') }}" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                        </div>


                        <div class="input-group form-group">
						    <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                                <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="new-password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="input-group form-group">
						    <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>              
                                <input id="password-confirm" type="password" class="form-control" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="form-group">
						<input type="submit" value="{{ __('Register') }}" class="btn float-right login_btn">
					</div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection
