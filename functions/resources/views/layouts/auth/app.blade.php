@extends('layouts.html5')

@section('app')
    @include('layouts.auth.header')
    @yield('body')
    @include('layouts.auth.footer')
@endsection

@section('plugins')
    <link href="{{ asset('css/layouts/auth/app.css') }}" rel="stylesheet">
    @yield('style')
    @yield('javascript')
@endsection
