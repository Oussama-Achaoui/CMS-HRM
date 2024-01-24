@extends('layouts.auth')

@section('content')



<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="d-flex align-items-center mb-3 pb-1">
                                <span class="h1 fw-bold mb-0"><img src="{{asset('images/media/1705595435codeup-high-resolution-logo-transparent.png')}}" width="100px" alt="codeup"></span>
                              </div>
            
                              <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Connectez-vous à votre compte</h5>
            
                            <form class="user" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12">

                                        <input id="name" type="text" placeholder="{{ __('Name') }}" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group">
                                    <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        
                                        <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="col-sm-6">
                                        <input id="password-confirm" type="password" class="form-control form-control-user" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required autocomplete="new-password"> 
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Register') }}
                                </button>
                               
                            </form>
                            <hr>
                            <div class="text-center">
                               @if (Route::has('password.request'))
                                    <a class="small" href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }}</a>
                                @endif
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">{{clean( trans('niva-backend.already_acc') , array('Attr.EnableID' => true))}}</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
