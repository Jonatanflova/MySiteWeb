@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            {{-- <div class="mb-5" style="width: 100; height: 200px; background: #DDD;"> --}}
                @yield('information_profile')
                {{-- @yield('content') --}}
                
            {{-- </div> --}}

            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('WELCOME!!! You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
