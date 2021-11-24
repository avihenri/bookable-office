@extends('layouts.master')
@section('title', 'Home | Office Bookings')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title uppercase text-white" style="display: inline-block">Your Organisation Dashboard</h4>
                        {{-- <a href="#" class="btn btn-info btn-round" style="float:right;">
                            <span class="material-icons-outlined">Edit</span> 
                            <div class="ripple-container"></div>
                        </a> --}}
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <h3 class="card-title text-white">Henri Design Studio</h3>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h4 class="card-title text-center text-white">Offices:
                                        <span>1</span>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h4 class="card-title text-center text-white">Desks:
                                        <span>1</span>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h4 class="card-title text-center text-white">Meeting Rooms:
                                        <span>1</span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 mb-4">
                            <div class="col-md-12 text-center">
                                <a href="#" class="btn btn-info btn-round font-600 font-size-1rem">
                                    <span>Manage Offices</span> 
                                    <div class="ripple-container"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            {{-- BOOK DESK --}}
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title uppercase">Book a Desk</h4>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover font-size-1rem text-white">
                            <tbody>
                                <tr>
                                <td>Scone Street</td>
                                <td>Room 1</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-round btn-sm font-600 font-size-1rem" style="float:right;">
                                        <span class="material-icons-outlined">Book</span> 
                                        <div class="ripple-container"></div>
                                    </a>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                      </div>
                </div>
            </div>

            {{-- BOOK MEETING ROOM --}}
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title uppercase">Book a Meeting Room</h4>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover font-size-1rem">
                            <tbody>
                                <tr>
                                <td>Scone Street</td>
                                <td>Board Room</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-round btn-sm font-600 font-size-1rem" style="float:right;">
                                        <span class="material-icons-outlined">Book</span> 
                                        <div class="ripple-container"></div>
                                    </a>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>

     </div>
</div>
@endsection
