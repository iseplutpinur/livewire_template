@extends('layouts.auth')

@section('content')
<div class="container" id="registration-form">
    <a class="login-logo"><img src="{{ asset('templates/assets/img/logo-big.png') }}"></a>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Registration Form</h2>
                </div>
                <form action="{{ route('register') }}" method="post" class="form-horizontal" id="validate-form">
                    @csrf
                    <div class="panel-body">	
                        <div class="form-group mb-md">
                            <div class="col-xs-12">
                                <div class="input-group">							
                                    <span class="input-group-addon">
                                        <i class="ti ti-user"></i>
                                    </span>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Username" required autocomplete="name" autofocus>

                                    @error('name')
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
                                        <i class="ti ti-email"></i>
                                    </span>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

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
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                    @error('password')
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
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repeat Password" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-n">
							<div class="col-xs-12">
								<div class="checkbox icheck">
									<label for=""><input type="checkbox" /> I accept the <a href="#">user agreement</a></label>
								</div>
							</div>
						</div>
                    </div>
                    <div class="panel-footer">
                        <div class="clearfix">
                            <a href="{{ url('login') }}" class="btn btn-default pull-left">Already Registered? Login</a>
                            <button type="submit" class="btn btn-primary pull-right">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
