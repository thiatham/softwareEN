@extends('layouts.back-office.app')

@section('style')
    <link href="{{ asset('css/back-office/settings/show.css') }}" rel="stylesheet">
@endsection

@section('body')
    <div id="app" class="container">
        Example Show
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/back-office/settings/show.js') }}"></script>
@endsection
