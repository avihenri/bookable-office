@extends('layouts.master')
@section('title', 'Add Room | Bookable Office')
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
                                    Add Room
                                </h4>
                           </div>
                            <div class="pull-right">
                                <a class="btn btn-secondary btn-round btn-sm font-600 font-size-1rem" href="{{ route('offices.edit', ['office' => $office->id]) }}">Back</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('rooms.store') }}">
                                @csrf

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
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                                      </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Type</label>
                                        <select class="form-control" name="type" id="type">
                                            <option class="dark" value="">--Select--</option>
                                            <option class="dark" value="BOARD_ROOM">Board Room</option>
                                            <option class="dark" value="MAIN_OFFICE">Main Office</option>
                                            <option class="dark" value="MEETING_ROOM">Meeting Room</option>
                                            <option class="dark" value="QUIET_ROOM">Quiet Room</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          <label class="bmd-label-floating">Max Capacity</label>
                                          <input type="number" class="form-control" name="max_capacity" value="{{ old('max_capacity') }}">
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
            </div>
        </div>
    </div>
@endsection
