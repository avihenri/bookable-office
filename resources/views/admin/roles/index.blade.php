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
                                <h4 class="card-title uppercase">User Role Management</h4>
                           </div>
                            <div class="pull-right">
                                @can('can-create')
                                    <a class="btn btn-info btn-round btn-sm font-600 font-size-1rem" href="{{ route('roles.create') }}">Create</a>
                                @endcan
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover font-size-1rem">
                                <thead>
                                    <th>Name</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ $role->name }}</td>
                                            <td class="pull-right">
                                                @can('can-edit')
                                                    <a class="btn btn-info btn-round btn-sm font-600 font-size-1rem" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                                                @endcan
                                                @can('can-delete')
                                                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-round btn-sm font-600 font-size-1rem']) !!}
                                                    {!! Form::close() !!}
                                                @endcan
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
