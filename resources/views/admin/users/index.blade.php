@extends('layouts.master')
@section('title', 'Admin: Users | Bookable Office')
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
                                <h4 class="card-title uppercase">User Management</h4>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-info btn-round btn-sm font-600 font-size-1rem" href="{{ route('users.create') }}">Add User</a>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover font-size-1rem">
                                <thead>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if(!empty($user->getRoleNames()))
                                                    @foreach($user->getRoleNames() as $role)
                                                        <label class="badge badge-success">{{ $role }}</label>
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td class="pull-right">
                                                    <a class="btn btn-info btn-round btn-sm font-600 font-size-1rem" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-round btn-sm font-600 font-size-1rem']) !!}
                                                    {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
