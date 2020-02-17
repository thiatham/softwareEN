@extends('layouts.e-commerce.app')

@section('style')
    <link href="{{ asset('css/e-commerce/thank-you.css') }}" rel="stylesheet">
@endsection

@section('body')
    <div id="app" class="container">
        Cart
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/e-commerce/thank-you.js') }}"></script>
@endsection
