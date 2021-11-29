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
                        <div class="col-md-6 mb-4 white-text text-center text-md-left">
                            <h1 class="display-4 font-weight-bold">Your Office Booking Solution</h1>
                            <hr class="hr-light">
                
                            <p><strong>
                                Do you have an office with hot desks? <br />
                                Do you have meeting rooms? <br />
                                <br />
                                Do you use a spreadsheet to book these??
                            </strong></p>
      
                        </div>

                        {{-- REGISTER / LOGIN --}}
                        <div class="col-md-6 col-xl-5 mb-4">
                            <div class="card">
                                <div class="card-body light-grey">
                                    <h3 class="dark-grey-text text-center"><strong>Create an Account</strong></h3>
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
