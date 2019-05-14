@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center h-100">
            <div class="card">
            <div class="card-header">
				<h3>{{ __('Login') }}</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div> 
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="input-group form-group">
                        <div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" name="password" required autocomplete="current-password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="row align-items-center remember">
                                
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                
                        </div>

                        <div class="form-group">
						<input type="submit" value="{{ __('Login') }}" class="btn float-right login_btn">
                        </div>
                    </form>
                    </div>  
                        <div class="card-footer">
				            <div class="d-flex justify-content-center links">
					        Don't have an account?<a href="{{ route('register') }}">Sign Up</a>
				            </div>
				                <div class="d-flex justify-content-center">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                @endif
				                </div>
			            
                        </div>
            </div>
        </div>
</div>
@endsection
