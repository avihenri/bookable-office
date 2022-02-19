@extends('layouts.master')
@section('title', 'Add Content Item | Bookable Office')
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
                                <h4 class="card-title uppercase">Add Content Item</h4>
                           </div>
                            <div class="pull-right">
                                <a class="btn btn-secondary btn-round btn-sm font-600 font-size-1rem" href="{{ route('contents.index') }}">Back</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('contents.store') }}">
                                @csrf

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Organisation</label>
                                        <input type="text" class="form-control" value="{{ auth()->user()->organisation->name ?? ''  }}" disabled>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Item</label>
                                        <input type="text" class="form-control" name="item" value="{{ old('item') }}" required>
                                      </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Type</label>
                                        <select class="form-control" name="type" id="type">
                                            <option class="dark" value="">--Select--</option>
                                            @foreach ($types as $key => $type)
                                                <option class="dark" value="{{ $key }}">{{ ucwords(strtolower(str_replace('_', ' ', $type)) ) }}</option>
                                            @endforeach
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Description</label>
                                        <input type="text" class="form-control" name="desc" rows="3" value="{{ old('desc') }}">
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          <label class="bmd-label-floating">Extra Location Information</label>
                                          <input type="text" class="form-control" name="location_desc" value="{{ old('location_desc') }}">
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
