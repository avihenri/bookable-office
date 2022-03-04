@extends('layouts.master')
@section('title', 'Book | Bookable Office')
@section('styles')
    <script src="{{mix('js/app.js')}}"></script>

@endsection
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                @include('includes.session-errors')
                @include('includes.session-success')
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="pull-left">
                            <h4 class="card-title uppercase">
                                <span class="material-icons">meeting_room</span>
                                Book
                            </h4>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-secondary btn-round btn-sm font-600 font-size-1rem" href="{{ route('home') }}">Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h2 class="uppercase">{{ $office->name ?? ''  }}</h3>
                        <h3>{{ucwords(strtolower(str_replace('_', ' ',  $room->type))) }}: {{ $room->name }}</h4>
                        <h4>Max Capacity: {{ $room->max_capacity }}</h4>

                        <div class="booking-form pt-3">
                            <h3 class="text-center alert alert-primary"> Check Availability </h3>
                            <form action="#">
                                @csrf

                                <div class="row">
                                    {{-- <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                          <label class="bmd-label-floating">Start Time</label>
                                          <input type="text" class="form-control" id="start-date-time">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                          <label class="bmd-label-floating">End Time</label>
                                          <input type="text" class="form-control" >
                                        </div>
                                    </div> --}}
                                    {{-- <div class="container">
                                        <div class='col-md-12'>
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Start Time</label>
                                               <div class="input-group date" id="datetimepicker7" data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker7" id="start-date-time"/>
                                                    <div class="input-group-append" data-target="#datetimepicker7" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-md-12'>
                                            <div class="form-group">
                                                <label class="bmd-label-floating">End Time</label>
                                               <div class="input-group date" id="datetimepicker8" data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker8" id="end-date-time"/>
                                                    <div class="input-group-append" data-target="#datetimepicker8" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div
                                        class='input-group'
                                        id='multipleDate'
                                        data-td-target-input='nearest'
                                        data-td-target-toggle='nearest'
                                    >
                                    <input
                                        id='multipleDateInput'
                                        type='text'
                                        class='form-control'
                                        data-td-target='#multipleDate'
                                    />
                                    <span
                                        class='input-group-text'
                                        data-td-target='#multipleDate'
                                        data-td-toggle='datetimepicker'
                                    >
                                        <span class='fas fa-calendar'></span>
                                    </span>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" class="btn btn-info pull-right font-600 font-size-1rem white">Sumbit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- DESKS --}}
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                    <div class="pull-left">
                        <h4 class="card-title uppercase">
                            <span class="material-icons">table_bar</span>
                           View Desks
                        </h4>
                    </div>
                    </div>
                    <div class="card-body table-responsive">
                        @if ($room->desks()->exists())
                            <table class="table table-hover font-size-1rem">
                                <thead>
                                    <th>Number</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Length (cm)</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach ($room->desks as $desk)
                                        <tr>
                                            <td>{{ $desk->number }}</td>
                                            <td>{{ $desk->name }}</td>
                                            <td>{{ ucwords(strtolower(str_replace('_', ' ',  $desk->type))) }}</td>
                                            <td>{{ $desk->length_cm }}</td>
                                            <td class="pull-right">
                                                <a class="btn btn-info btn-round btn-sm font-600 font-size-1rem white" href="{{ route('desks.edit', ['desk' => $desk->id]) }}">
                                                    View
                                                </a>
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

    <x-modals.delete/>
@endsection
@section('scripts')
    <script>
        console.log(window.moment().format());
        $(function () {
            // $('#datetimepicker7').datetimepicker();
            // $('#datetimepicker8').datetimepicker({
            //     useCurrent: false
            // });
            // $("#datetimepicker7").on("change.datetimepicker", function (e) {
            //     $('#datetimepicker8').datetimepicker('minDate', e.date);
            // });
            // $("#datetimepicker8").on("change.datetimepicker", function (e) {
            //     $('#datetimepicker7').datetimepicker('maxDate', e.date);
            // });

            new tempusDominus.TempusDominus(document.getElementById('multipleDatePicker'), {
                multipleDates: true
            });

        });
    </script>
@endsection
