@extends('layouts.guest')
@section('title', 'Bookable Office')
@section('content')
<div class="content">
    <div class="container">
        <div class="row wow fadeIn light-grey">
            <div class="card welcome-page-card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title uppercase text-white" style="display: inline-block">Welcome to Bookable Office</h4>
                </div>
                <div class="card-body light-grey">
                    <div class="row">
                        {{-- INFO --}}
                        <div class="col-md-6 mb-4 white-text text-center text-md-left mt-5">
                            <h1 class="display-4 font-weight-bold text-center mt-3">Your Office Booking Solution</h1>
                            <hr class="hr-light">

                            <p class="font-size-2rem text-center mb-4"><strong><span class="material-icons">table_restaurant</span> Book a desk </strong></p>
                            <p class="font-size-2rem text-center mb-4"><strong><span class="material-icons">devices</span> Book a device </strong></p>
                            <p class="font-size-2rem text-center mb-4"><strong><span class="material-icons">
                                meeting_room
                                </span> Book a meeting room</strong></p>

                            <p class="font-size-2rem mt-5 text-center"><strong><a href="#" class="btn btn-primary">About Bookable Office</a></strong></p>

                        </div>

                        {{-- REGISTER / LOGIN --}}
                        <div class="col-md-6 col-xl-5 mb-4">
                            <div class="card">
                                <div class="card-body light-grey">
                                    <h3 class="dark-grey-text text-center"><strong>Register a New Organisation</strong></h3>
                                    <div class="row mt-4 mb-4">
                                        <div class="col-md-12 text-center">
                                            <a href="/register" class="btn btn-info btn-round font-600 font-size-1rem">
                                                <span>REGISTER</span>
                                                <div class="ripple-container"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <hr>
                                    <h3 class="dark-grey-text text-center"><strong>Already have an account?</strong></h3>
                                    <div class="row mt-4 mb-4">
                                        <div class="col-md-12 text-center">
                                            <a href="/login" class="btn btn-info btn-round font-600 font-size-1rem">
                                                <span>Login</span>
                                                <div class="ripple-container"></div>
                                            </a>
                                        </div>
                                    </div>

                                    <h6 class="text-center">Not got an account but your organisation uses this app?
                                        <br>
                                        You will need to ask your organisation to add you as a user.
                                    </h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
