@extends('layouts.master')
@section('title', 'Home | Office Bookings')
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
                        <h4 class="card-title uppercase text-white" style="display: inline-block">
                            @if (is_null($organisation))
                                Create Your Organisation
                            @else
                                Your Organisation
                            @endif
                        </h4>
                    </div>
                    <div class="card-body">
                        @if (is_null($organisation))
                            <form method="POST" action="/organisation" id="add-organisation">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name</label>
                                            <input type="text" class="form-control" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Bio</label>
                                            <textarea class="form-control" rows="5" name="bio"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="javascript:void(0)" class="btn btn-info btn-round btn-sm font-600 font-size-1rem" id="submit-organisation" style="float:right;">
                                            <span class="material-icons-outlined">Save</span>
                                            <div class="ripple-container"></div>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        @else
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <h3 class="card-title text-white" id="organisation-name">
                                        {{ $organisation->name }}
                                        <a href="#" class="text-info font-600 font-size-1rem inline-block" id="edit-name">
                                            <span class="material-icons">edit</span>
                                        </a>
                                    </h3>
                                    <div class="form-group display-none" id="name-form-wrapper">
                                        <form method="POST" action="/organisation/{{  $organisation->id }}" id="update-organisation-name">
                                            @csrf
                                            @method('put')
                                            <input type="text" name="name" class="form-control pt-2" value="{{ $organisation->name }}">
                                            <a href="javascript:void(0)" class="btn btn-info btn-round btn-sm font-600 font-size-1rem" id="save-name" style="float:right;">
                                                <span class="material-icons-outlined">Save</span>
                                                <div class="ripple-container"></div>
                                            </a>
                                            <a href="javascript:void(0)" class="btn btn-danger btn-round btn-sm font-600 font-size-1rem" id="cancel-name" style="float:right;">
                                                <span class="material-icons-outlined">Cancel</span>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <label class="size-120-percent inline-block">Bio</label>
                                        <a href="#" class="text-info font-600 font-size-1rem inline-block" id="edit-bio">
                                            <span class="material-icons">edit</span>
                                        </a>
                                        <h4 class="card-title text-white pt-2" id="organisation-bio">{{  $organisation->bio }}</h5>
                                    </div>
                                    <div class="form-group display-none" id="bio-form-wrapper">
                                        <form method="POST" action="/organisation/{{  $organisation->id }}" id="update-organisation-bio">
                                            @csrf
                                            @method('put')
                                            <textarea class="form-control pt-2" rows="5" name="bio" id="bio-field" oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'>{{  $organisation->bio }}</textarea>
                                            <a href="javascript:void(0)" class="btn btn-info btn-round btn-sm font-600 font-size-1rem" id="save-bio" style="float:right;">
                                                <span class="material-icons-outlined">Save</span>
                                                <div class="ripple-container"></div>
                                            </a>
                                            <a href="javascript:void(0)" class="btn btn-danger btn-round btn-sm font-600 font-size-1rem" id="cancel-bio" style="float:right;">
                                                <span class="material-icons-outlined">Cancel</span>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        @if (!is_null($organisation))
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
        @endif

     </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            // submit add organisation
            $('#submit-organisation-bio, #update-organisation-name').on('click', () => {
                $('#add-organisation').submit();
            });

            // update organisation name
            $('#edit-name, #cancel-name').on('click', () => {
                $('#organisation-name, #name-form-wrapper').toggle();
            });

            // update organisation bio
            $('#edit-bio, #cancel-bio').on('click', () => {
                $('#organisation-bio, #bio-form-wrapper').toggle();
            });

            // submit save organisation bio
            $('#save-bio').on('click', () => {
                $('#update-organisation-bio').submit();
            });

            // submit save organisation bio
            $('#save-name').on('click', () => {
                $('#update-organisation-name').submit();
            });
        });
    </script>
@endsection
