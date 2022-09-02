@extends('layouts.auth')

@section('content')
<div class="container" id="login-form">
    <a class="login-logo"><img src="{{ asset('templates/assets/img/logo-big.png') }}"></a>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Login Form</h2>
                </div>
                <form action="{{ route('login') }}" method="post" class="form-horizontal" id="validate-form">
                    @csrf
                    <div class="panel-body">	
                        <div class="form-group mb-md">
                            <div class="col-xs-12">
                                <div class="input-group">							
                                    <span class="input-group-addon">
                                        <i class="ti ti-user"></i>
                                    </span>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Username" data-parsley-minlength="6" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-md">
                            <div class="col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="ti ti-key"></i>
                                    </span>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-n">
                            <div class="col-xs-12">
                                @if (Route::has('password.request'))
                                    {{-- <a class="pull-left" href="{{ route('password.request') }}">
                                        Forgot Password
                                    </a> --}}
                                @endif
                                <div class="checkbox-inline icheck pull-right p-n">
                                    <label for="">
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="clearfix">
                            <a href="{{ url('register') }}" class="btn btn-default pull-left">Register</a>
                            <button type="submit" class="btn btn-primary pull-right">
                                Login
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            {{-- <div class="text-center">
                <a href="#" class="btn btn-label btn-social btn-facebook mb-md"><i class="ti ti-facebook"></i>Connect with Facebook</a>
                <a href="#" class="btn btn-label btn-social btn-twitter mb-md"><i class="ti ti-twitter"></i>Connect with Twitter</a>
            </div> --}}
        </div>
    </div>
</div>
@endsection
