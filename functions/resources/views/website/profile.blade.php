@extends('layouts.website.app')

@section('style')
    <link href="{{ asset('css/website/profile.css') }}" rel="stylesheet">
@endsection

@section('body')
    <div id="app" class="container">
        Profile
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/website/profile.js') }}"></script>
@endsection
