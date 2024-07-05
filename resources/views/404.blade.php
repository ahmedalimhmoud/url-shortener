@extends('layout.app')

@section('title', __('Page Not Found'))

@section('content')
    <div class="container not-found">
        <h1>404</h1>
        <p>{{ __('Page Not Found') }}</p>
        <a href="{{ url('/') }}" class="primary-button">{{ __('Go back to the homepage') }}</a>
    </div>
@endsection
