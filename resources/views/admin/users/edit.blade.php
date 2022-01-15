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
                                <h4 class="card-title uppercase">Edit User Roles</h4>
                           </div>
                            <div class="pull-right">
                                <a class="btn btn-secondary btn-round btn-sm font-600 font-size-1rem" href="{{ route('users.index') }}">Back</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('users.update', ['user' => $user->id]) }}">
                                @csrf
                                @method('put')

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">First Name</label>
                                            <input type="text" class="form-control" value="{{ $user->first_name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Last Name</label>
                                            <input type="text" class="form-control" value="{{ $user->last_name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Roles</label>
                                            <br>
                                            @foreach($roles as $id => $name)
                                                <label>
                                                    <input class="name" name="roles[]" type="checkbox" value="{{ $id }}" {{ in_array($name, $userRoles) ? 'checked' : '' }}>
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
