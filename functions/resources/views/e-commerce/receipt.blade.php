@extends('layouts.e-commerce.app')

@section('style')
    <link href="{{ asset('css/e-commerce/receipt.css') }}" rel="stylesheet">
@endsection

@section('body')
    <div id="app" class="container">
        Receipt
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/e-commerce/receipt.js') }}"></script>
@endsection
