@extends('layouts.master')
@section('title', 'Add Office | Bookable Office')
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
                                <h4 class="card-title uppercase">
                                    <span class="material-icons">meeting_room</span>
                                    Edit Room
                                </h4>
                           </div>
                            <div class="pull-right">
                                <a class="btn btn-secondary btn-round btn-sm font-600 font-size-1rem" href="{{ route('offices.edit', ['office' => $office->id]) }}">Back</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('rooms.update', ['room' => $room->id]) }}">
                                @csrf
                                @method('put')

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Office</label>
                                        <input type="text" class="form-control" value="{{ $office->name ?? ''  }}" disabled>
                                        <input type="hidden" name="office_id" value="{{ $office->id }}">
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $room->name }}" required>
                                      </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Type</label>
                                        <select class="form-control" name="type" id="type">
                                            <option class="dark" value="BOARD_ROOM" {{ $room->type == 'BOARD_ROOM' ? 'selected' : '' }}>Board Room</option>
                                            <option class="dark" value="MAIN_OFFICE" {{ $room->type == 'MAIN_OFFICE' ? 'selected' : '' }}>Main Office</option>
                                            <option class="dark" value="MEETING" {{ $room->type == 'MEETING_ROOM' ? 'selected' : '' }}>Meeting Room</option>
                                            <option class="dark" value="QUIET" {{ $room->type == 'QUIET_ROOM' ? 'selected' : '' }}>Quiet Room</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          <label class="bmd-label-floating">Max Capacity</label>
                                          <input type="number" class="form-control" name="max_capacity" value="{{ $room->max_capacity }}">
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" class="btn btn-info pull-right font-600 font-size-1rem white">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                        <div class="pull-left">
                            <h4 class="card-title uppercase">
                                <span class="material-icons">table_bar</span>
                                Desks
                            </h4>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-info btn-round btn-sm font-600 font-size-1rem white" href="{{ route('desks.create', ['room' => $room]) }}">Add Desk</a>
                        </div>
                        </div>
                        <div class="card-body table-responsive">
                            @if ($room->desks()->exists())
                            <table class="table table-hover font-size-1rem">
                                <thead>
                                    <th>Number</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach ($room->desks as $desk)
                                        <tr>
                                            <td>{{ $desk->number }}</td>
                                            <td>{{ $desk->name }}</td>
                                            <td>{{ ucwords(strtolower(str_replace('_', ' ',  $desk->type))) }}</td>
                                            <td class="pull-right">
                                                <a class="btn btn-info btn-round btn-sm font-600 font-size-1rem white" href="{{ route('desks.edit', ['desk' => $desk->id, 'room' => $room->id]) }}">
                                                    <span class="material-icons">edit</span>
                                                </a>
                                                {!! Form::open(['method' => 'DELETE','route' => ['desks.destroy', $desk->id],'style'=>'display:inline', 'id' => 'delete-desk-'.$desk->id]) !!}
                                                    <a href="javascript:void(0)" class="btn btn-danger btn-round btn-sm font-600 font-size-1rem delete-btn" data-toggle="modal" data-target="#delete-modal" data-deleteditem="desk" data-itemid="{{ $desk->id }}">
                                                        <span class="material-icons">delete</span>
                                                    </a>
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <p>No desks yet.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
