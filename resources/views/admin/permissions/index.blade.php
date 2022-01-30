@extends('layouts.master')
@section('title', 'Admin: Permissions | Bookable Office')
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
                                <h4 class="card-title uppercase">Permissions Management</h4>
                           </div>
                            <div class="pull-right">
                            {{-- @can('role-create') --}}
                                <a class="btn btn-info btn-round btn-sm font-600 font-size-1rem" href="{{ route('permissions.create') }}">Create</a>
                            {{-- @endcan --}}
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover font-size-1rem">
                                <thead>
                                    <th>Name</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $permission)
                                        <tr>
                                            <td>{{ $permission->name }}</td>
                                            <td class="pull-right">
                                                {{-- @can('role-edit') --}}
                                                    <a class="btn btn-info btn-round btn-sm font-600 font-size-1rem" href="{{ route('permissions.edit',$permission->id) }}">Edit</a>
                                                {{-- @endcan --}}
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
