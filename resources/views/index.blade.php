@extends('layout.app')

@section('title', __('URL Shortener'))

@section('content')
    <div class="container">
        <h1>{{ __('URL Shortener') }}</h1>
        <div id="app">
            <url-shortener-form></url-shortener-form>
        </div>
    </div>
@endsection
