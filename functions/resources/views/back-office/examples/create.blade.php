@extends('layouts.back-office.app')

@section('style')
    <link href="{{ asset('css/back-office/create.css') }}" rel="stylesheet">
@endsection

@section('body')
    <div id="app" class="container">
        Example Create
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/back-office/create.js') }}"></script>
@endsection
