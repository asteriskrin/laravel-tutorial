@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    {{-- @can('go-to-private')
                        <br><a href="{{ url('/private') }}">Private</a>
                    @endcan
                    @can('go-to-response')
                        <br><a href="{{ url('/response') }}">Private with response</a>
                    @endcan --}}
                    {{-- @canany(['go-to-private', 'go-to-response']) --}}
                        <br><a href="{{ url('/private') }}">Private</a>
                        <br><a href="{{ url('/response') }}">Private with response</a>
                    {{-- @endcanany --}}
                        <br><a href="{{ url('/post') }}" class="text-sm text-gray-700 underline">View Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
