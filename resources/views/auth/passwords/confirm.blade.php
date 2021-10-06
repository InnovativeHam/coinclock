@extends('layouts.user')

@section('title', 'Confirm Password')

@section('content')
<div class="section-auth container">
            <div class="row p-5">
                <div class="col-md-6 col-12 m-auto">
                    <div class="auth-header mb-3">
                        <p class="mx-auto"><img src="{{ asset('img/favicon.png') }}" class="img-fluid" /></p>
                        <h3>{{ __('Confirm Password') }}</h3>
                    </div>                    
                    <form class="auth-form" method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <p>{{ __('Please confirm your password before continuing.') }}</p>
                            </div>
                        </div>
                        <div class="row gy-3">
                            <div class="col-12">
                                <label for="password" class="mb-1">{{ __('Password') }}</label>
                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="password-confirm" class="mb-1">{{ __('Confirm Password') }}</label>
                                <input type="password" id="password-confirm" class="form-control @error('password-confirm') is-invalid @enderror" name="password_confirmation" autocomplete="new-password" />
                            </div>
                            <div class="col-12">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-primary">{{ __('Forgot password?') }}</a>
                                @endif
                            </div>

                            <div class="col-12">
                                <button type="sumbit" class="btn primary-btn w-100 mt-3">{{ __('Confirm Password') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection
