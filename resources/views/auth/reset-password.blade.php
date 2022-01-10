@extends('layouts.guest')
@section('title', 'Reset Password | Bookable Office')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('includes.session-errors')
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header white">
                    {!! __('Reset password') !!}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                           <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <!-- Email Address -->
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label">{{ __('E-Mail Address*') }}</label>
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control mt-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label">{{ __('Password*') }}</label>
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control mt-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label">{{ __('Confirm Password*') }}</label>
                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control mt-2" name="password_confirmation" required autocomplete="new-password">                            </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Reset') }}
                                    </button>
                                </div>
                            </div>
                    </form>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection