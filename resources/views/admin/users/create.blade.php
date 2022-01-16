@extends('layouts.master')
@section('title', 'Admin: Roles | Bookable Office')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('includes.session-errors')
                    @include('includes.session-success')
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                           <div class="pull-left">
                                <h4 class="card-title uppercase">Add User</h4>
                           </div>
                            <div class="pull-right">
                                <a class="btn btn-secondary btn-round btn-sm font-600 font-size-1rem" href="{{ route('users.index') }}">Back</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('users.store') }}">
                                @csrf

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                          <label class="bmd-label-floating">Organisation</label>
                                        <input type="text" class="form-control" value="{{ $adminUser['organisation']  }}" disabled>
                                        </div>
                                      </div>

                                    <div class="col-md-12 mb-3">
                                        <div class="form-group row">
                                            <label for="first_name" class="col-md-4 col-form-label">{{ __('First Name*') }}</label>
                                            <div class="col-md-12">
                                                <input id="name" type="text" class="form-control mt-2 @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                                @error('first_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="last_name" class="col-md-4 col-form-label">{{ __('Last Name*') }}</label>
                                            <div class="col-md-12">
                                                <input id="lastName" type="text" class="form-control mt-2 @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                                @error('last_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="username" class="col-md-4 col-form-label">{{ __('Username*') }}</label>
                                            <div class="col-md-12">
                                                <input id="username" type="text" class="form-control mt-2 @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                                @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

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

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label">{{ __('Confirm Password*') }}</label>
                                            <div class="col-md-12">
                                                <input id="password-confirm" type="password" class="form-control mt-2" name="password_confirmation" required autocomplete="new-password">                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="bmd-label-floating">Roles</label>
                                            <br>
                                            <br>
                                            @foreach($roles as $id => $name)
                                                <label>
                                                    <input class="name" name="roles[]" type="checkbox" value="{{ $id }}">
                                                    {{ $name }}
                                                </label>
                                                <br/>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" class="btn btn-info pull-right font-600 font-size-1rem">Update</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
