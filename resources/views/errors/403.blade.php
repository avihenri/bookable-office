@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-error">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="card-error-face">
                                        <span class="material-icons">
                                            sentiment_very_dissatisfied
                                            </span>
                                    </div>
                                </div>
                                <div class="col-md-8 mb-4">
                                    <h2 class="card-title text-white mb-4">Oops, you are not authorised for this page.</h3>
                                    <h3 class="card-title text-white">Error 403</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
