@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} {{ __('You are logged in!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="navbar-nav ms-auto">
                            
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('genre') }}">Genre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('artist') }}">Artist</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('venue') }}">Venue</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('events') }}">Events</a>
                        </li>
                    </ul>    
                    
                        


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
