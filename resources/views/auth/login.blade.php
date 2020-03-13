@extends('layouts.frontendLayout.frontend_design')
@section('content')
    <div class="main-content">
        <section>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="{{ route('login') }}">Login</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active p-15" id="login-tab">
                        <h4 class="text-gray mt-0 pt-5"> Login</h4>
                        <hr>
                        <form class="clearfix" method="POST" action="{{ route('login') }}">
                        @csrf
                        @if (session('waiting_for_login', false))
                            <h4 class="text-gray pt-10 mt-0 mb-30">
                            Hi! {{session('customer_name')}} . Please login to confirm your request!</h4>
                            <input type="hidden" value="true" name="waiting_for_login">
                            <input type="hidden" value="{{session('email')}}" name="email">
                        @else
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="email ">Email</label>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback"><strong>{{ $errors->first('password') }}</strong></span>
                                @endif
                            </div>
                        </div>
                        <div class="checkbox pull-left mt-15">
                            <label for="form_checkbox">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                            </label>
                        </div>
                      <div class="form-group pull-right mt-10">
                        <button type="submit" class="btn btn-dark btn-sm">Login</button>
                      </div>
                      <div class="clear text-center pt-10">
                        <a class="text-theme-colored font-weight-600 font-12" href="{{ route('password.request') }}">Forgot Your Password?</a>
                      </div>
                      <div class="clear text-center pt-10">
                        <a class="btn btn-dark btn-lg btn-block no-border mt-15 mb-15" href="#" data-bg-color="#3b5998">Login with facebook</a>
                        <a class="btn btn-dark btn-lg btn-block no-border" data-bg-color="#ff2052">Login with Google</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    </div>
@endsection