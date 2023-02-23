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
                            <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <label for="login" class="col-md-6 col-form-label" style="padding-left:18%"><strong>REGISTER NOW</strong></label>

                        <div class="row mb-3">
                            <div class="col-md-8">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Your Name" style="margin-left:27%;">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your Email" style="margin-left:27%;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Your Password" style="margin-left:27%;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" style="margin-left:27%;">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-2" >
                                <button type="submit" class="btn btn-dark" style="width:100%">
                                    {{ __('Register') }}
                                </button>

                                
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-8 offset-md-3">
                                @if (Route::has('login'))
                                    <p>Have an account! <a href="{{ route('login') }}">{{ __('Login.') }}</a></p>
                                @endif
                            </div>
                        </div>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
            </div>
            <!---->
            
        </div>
    </div>
</div>
@endsection
