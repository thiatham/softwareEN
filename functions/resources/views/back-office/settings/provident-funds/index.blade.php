@extends('layouts.back-office.app')

@section('style')
    <link href="{{ asset('css/back-office/settings/example/index.css') }}" rel="stylesheet">
@endsection

@section('body')
    <div id="app" class="container">
        Example Index
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/back-office/settings/example/index.js') }}"></script>
@endsection
