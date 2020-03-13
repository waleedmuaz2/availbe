@extends('layouts.frontendLayout.frontend_design')
@section('content')
    {{--<img src="{{asset('font-end/images/partners/partners-icon.png')}}" width="50"--}}
    {{--height="50"--}}
    {{--class="img-fluid text-center" alt="Responsive image"/>--}}
    <h4 class="text-gray mt-0 pt-5 text-center"> Partners Account Login</h4>
    <hr>
    <form class="clearfix" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="col-lg-8 col-lg-offset-2">
            @if (session('waiting_for_login', false))   {{--// if a user is customer do not show this section--}}
            <h4 class="text-gray pt-10 mt-0 mb-30">
                Hi! {{session('customer_name')}} . Please login to confirm your request!</h4>
            <input type="hidden" value="true" name="waiting_for_login">
            <input type="hidden" value="{{session('email')}}" name="email">
            @else
                <div class="form-group">
                    <label for="form_username_email">Email</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            @endif
            <div class="form-group ">
                <label for="form_password">Password</label>
                <input id="password" type="password"
                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('password') }}</strong></span>
                @endif
            </div>

            <div class="checkbox mt-15">
                <label for="form_checkbox">
                    <input type="checkbox"
                           name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}</label>
            </div>
            <div class="clear text-center pt-10">
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            </div>
            <div class="form-group mt-10 text-center">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
            </div>

            <div class="clear text-center pt-10">
                <a class="btn btn-dark btn-lg btn-block no-border mt-15 mb-15" href="#"
                   data-bg-color="#3b5998">Login with facebook</a>
                <a class="btn btn-dark btn-lg btn-block no-border" data-bg-color="#ff2052">Login
                    with Google</a>
            </div>
        </div>
    </form>
@endsection