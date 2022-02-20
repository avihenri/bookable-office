@extends('layouts.master')
@section('title', 'Edit Desk | Bookable Office')
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
                                    <span class="material-icons">table_bar</span>
                                    Edit Desk
                                </h4>
                           </div>
                            <div class="pull-right">
                                <a class="btn btn-secondary btn-round btn-sm font-600 font-size-1rem" href="{{ route('rooms.edit', ['room' => $room->id]) }}">Back</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('desks.update', ['desk' => $desk->id]) }}">
                                @csrf
                                @method('put')

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Room</label>
                                        <input type="text" class="form-control" value="{{ $room->name ?? ''  }}" disabled>
                                        <input type="hidden" name="room_id" value="{{ $room->id }}">
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          <label class="bmd-label-floating">Number</label>
                                          <input type="number" min="0" class="form-control" name="number" value="{{ $desk->number }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $desk->name }}" required>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          <label class="bmd-label-floating">Length (cm)</label>
                                          <input type="number" min="0" class="form-control" name="length_cm" value="{{ $desk->length_cm }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Type</label>
                                        <select class="form-control" name="type" id="type" required>
                                            <option class="dark" value="STANDARD" {{ $desk->lemgth_cm === 'STANDARD' ? 'selected' : '' }}>Standard</option>
                                            <option class="dark" value="STANDING" {{ $desk->lemgth_cm === 'STANDING' ? 'selected' : '' }}>Standing</option>
                                            <option class="dark" value="STANDARD_STANDING" {{ $desk->lemgth_cm === 'STANDARD_STANDING' ? 'selected' : '' }}>Standard/Standing</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Contents</label>
                                            <br>
                                            <br>
                                            @foreach($allContents as $content)
                                                <label>
                                                    <input class="name" name="contents[]" type="checkbox" value="{{ $content['id'] }}"
                                                    {{ in_array($content['id'], $deskContentIds) ? 'checked' : '' }}
                                                    >
                                                    {{ $content['item'] }}
                                                </label>
                                                <br/>
                                            @endforeach
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
