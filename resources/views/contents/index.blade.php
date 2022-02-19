@extends('layouts.master')
@section('title', 'Contents Management | Bookable Office')
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
                                <h4 class="card-title uppercase">Contents Management</h4>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-info btn-round btn-sm font-600 font-size-1rem white" href="{{ route('contents.create') }}">Add Item</a>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover font-size-1rem">
                                <thead>
                                    <th>Item</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach ($contents as $content)
                                        <tr>
                                            <td>{{ $content->item }}</td>
                                            <td>{{ $content->type }}</td>
                                            <td>{{ $content->desc }}</td>
                                            <td class="pull-right">
                                                <a class="btn btn-info btn-round btn-sm font-600 font-size-1rem white" href="{{ route('contents.edit', $content->id) }}">
                                                    <span class="material-icons">edit</span>
                                                </a>
                                                {!! Form::open(['method' => 'DELETE','route' => ['contents.destroy', $content->id],'style'=>'display:inline', 'id' => 'delete-content-'.$content->id]) !!}
                                                    <a href="javascript:void(0)" class="btn btn-danger btn-round btn-sm font-600 font-size-1rem delete-btn" data-toggle="modal" data-target="#delete-modal" data-deleteditem="content" data-itemid="{{ $content->id }}">
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

