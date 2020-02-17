@extends('layouts.e-commerce.app')

@section('style')
    <link href="{{ asset('css/e-commerce/cart.css') }}" rel="stylesheet">
@endsection

@section('body')
    <div id="app" class="container">
        Cart
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/e-commerce/cart.js') }}"></script>
@endsection
