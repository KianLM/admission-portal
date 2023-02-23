@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-6">
                    <img src="applicant/images/logo.png" class="img-fluid rounded-start" alt="..." style="background-color:maroon;">
                    </div>
                    <div class="col-md-6">
                    <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <label for="login" class="col-md-6 col-form-label" style="padding-left:18%"><strong>LOGIN NOW</strong></label>
                        <div class="row mb-2">
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="johndoe@example.com" style="margin-left:27%">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="margin-left:27%;" placeholder="Enter Your Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="margin-left:23%">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-2" >
                                <button type="submit" class="btn btn-dark" style="width:100%">
                                    {{ __('Login') }}
                                </button>

                                
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-8 offset-md-3">
                                @if (Route::has('register'))
                                    <p>Create Account! <a href="{{ route('register') }}">{{ __('Register.') }}</a></p>
                                @endif
                            </div>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
