@extends('layouts.master')
@section('title', e($options['title'] ?? 'Office Bookings'))
{{-- test --}}
@section('main-content')

    {{-- ERRORS --}}
    @include('includes.session-errors')  

    {{-- MAIN CONTENT --}}
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    {{-- PAGE HEADER --}}
                    <div class="card">
                        <div class="card-header white uppercase">
                            {{ $options['header'] }}

                            {{-- SUCCESS MSG --}}
                            @include('includes.session-success')    
                        </div>
                    </div>

                    {{-- FORM --}}
                    @include('includes.generic-form')  
                </div>
            </div>
        </div>
    </div>

@endsection
