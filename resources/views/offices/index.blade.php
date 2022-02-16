@extends('layouts.master')
@section('title', 'Office Management | Bookable Office')
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
                                <h4 class="card-title uppercase">Office Management</h4>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-info btn-round btn-sm font-600 font-size-1rem white" href="{{ route('offices.create') }}">Add Office</a>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover font-size-1rem">
                                <thead>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach ($offices as $office)
                                        <tr>
                                            <td>{{ $office->name }}</td>
                                            <td>{{ $office->address }}</td>
                                            <td class="pull-right">
                                                <a class="btn btn-info btn-round btn-sm font-600 font-size-1rem white" href="{{ route('offices.edit',$office->id) }}">
                                                    <span class="material-icons">edit</span>
                                                </a>
                                                {!! Form::open(['method' => 'DELETE','route' => ['offices.destroy', $office->id],'style'=>'display:inline', 'id' => 'delete-office-'.$office->id]) !!}
                                                    <a href="javascript:void(0)" class="btn btn-danger btn-round btn-sm font-600 font-size-1rem delete-btn" data-toggle="modal" data-target="#delete-modal" data-deleteditem="office" data-itemid="{{ $office->id }}">
                                                        <span class="material-icons"> delete</span>
                                                    </a>
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

    <x-modals.delete/>
@endsection

