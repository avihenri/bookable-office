@extends('layouts.master')
@section('title', 'Edit Office | Bookable Office')
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
                                <h4 class="card-title uppercase">Edit Office</h4>
                           </div>
                            <div class="pull-right">
                                <a class="btn btn-info btn-round btn-sm font-600 font-size-1rem white" href="{{ route('rooms.create', ['office' => $office]) }}">Add Room</a>
                                <a class="btn btn-secondary btn-round btn-sm font-600 font-size-1rem" href="{{ route('offices.index') }}">Back</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('offices.update', ['office' => $office->id]) }}">
                                @csrf
                                @method('put')

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Organisation</label>
                                      <input type="text" class="form-control" value="{{ $user->organisation->name ?? ''  }}" disabled>
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $office->name }}" required>
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Description</label>
                                        <textarea type="text" class="form-control" name="desc" rows="3">{{ $office->desc ?? '' }}</textarea>
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Address</label>
                                        <input type="text" class="form-control" name="address" value="{{ $office->address }}" required>
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">City</label>
                                        <input type="text" class="form-control" name="city" value="{{ $office->city }}" required>
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Country</label>
                                        <select class="form-control" name="country_id" id="country_id">
                                            <option class="dark" value="">--Select--</option>
                                            @foreach ($countries as $key => $country)
                                                <option class="dark-font" value="{{ $key }}" {{ $office->country_id === $key ? 'selected' : '' }}>{{ $country }}</option>
                                            @endforeach
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                          <label class="bmd-label-floating">Post Code</label>
                                          <input type="text" class="form-control" name="post_code" value="{{ $office->post_code }}" required>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Building Type</label>
                                        <input type="email" class="form-control" name="building_type">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Office Type</label>
                                        <input type="email" class="form-control" name="office_type">
                                        <select class="form-control" name="office_type" id="office_type">
                                            <option value="OPEN_PLANNED"></option>
                                            <option value="SHARED"></option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Accessibility</label>
                                        <input type="email" class="form-control" name="accessibility">
                                    </div>
                                    </div> --}}
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" class="btn btn-info pull-right font-600 font-size-1rem white">Update</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- ROOMS --}}
                @if ($office->rooms()->exists())
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                            <div class="pull-left">
                                    <h4 class="card-title uppercase">Rooms</h4>
                            </div>
                            <div class="pull-right"></div>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-hover font-size-1rem">
                                    <thead>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Capacity</th>
                                        <th>Desks</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        @foreach ($office->rooms as $room)
                                            <tr>
                                                <td>{{ $room->name }}</td>
                                                <td>{{ ucwords(strtolower(str_replace('_', ' ',  $room->type))) }}</td>
                                                <td>{{ $room->max_capacity ?? '' }}</td>
                                                <td></td>
                                                <td class="pull-right">
                                                    <a class="btn btn-info btn-round btn-sm font-600 font-size-1rem white" href="{{ route('rooms.edit', ['room' => $room->id, 'office' => $office->id]) }}">
                                                        <span class="material-icons">edit</span>
                                                    </a>
                                                    {!! Form::open(['method' => 'DELETE','route' => ['rooms.destroy', $room->id],'style'=>'display:inline', 'id' => 'delete-room-'.$room->id]) !!}
                                                        <a href="javascript:void(0)" class="btn btn-danger btn-round btn-sm font-600 font-size-1rem delete-btn" data-toggle="modal" data-target="#delete-modal" data-deleteditem="room" data-itemid="{{ $room->id }}">
                                                            <span class="material-icons">delete</span>
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
                @endif
            </div>
        </div>
    </div>

    <div class="modal" id="delete-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Are you sure you want to delete?</h5>
              </div>
              <div class="modal-footer">
                    <a href="javascript:void(0)" class="btn btn-secondary font-600 font-size-1rem" data-dismiss="modal">Cancel</a>
                    <a href="javascript:void(0)" class="btn btn-info font-600 font-size-1rem white" id="delete-modal-submit" data-deleteditem="" data-itemid="">Continue</a>
              </div>
          </div>
        </div>
      </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {

            $('.delete-btn').on('click', function() {
                $('#delete-modal-submit').data('itemid', $(this).data('itemid'));
                $('#delete-modal-submit').data('deleteditem', $(this).data('deleteditem'));
            });

           $('#delete-modal-submit').on('click', function() {
                $(`#delete-${$(this).data('deleteditem')}-${$(this).data('itemid')}`).submit();
           });
        });
    </script>
@endsection
