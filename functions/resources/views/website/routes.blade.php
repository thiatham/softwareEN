@extends('layouts.website.app')

@section('style')
@endsection

@section('body')
    <div class="container-fluid">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Routes</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <table id="tbl_routes" class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Method</th>
                                            <th>URI</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                            <th>Middleware</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($routes as $route)
                                            <tr>
                                                <td class="d-i-f">
                                                    @foreach ($route['methods'] as $method)
                                                        @if($method == "GET" || $method == "HEAD")
                                                            <label class="badge badge-success">{{ $method }}</label>
                                                        @elseif($method == "PUT" || $method == "PATCH")
                                                            <label class="badge badge-info">{{ $method }}</label>
                                                        @elseif($method == "POST")
                                                            <label class="badge badge-warning">{{ $method }}</label>
                                                        @elseif($method == "DELETE")
                                                            <label class="badge badge-danger">{{ $method }}</label>
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>
                                                    {{ $route['uri'] }}
                                                </td>
                                                <td>
                                                    {{ $route['name'] }}
                                                </td>
                                                <td>
                                                    {{ $route['action'] }}
                                                </td>
                                                <td>
                                                    {{ $route['middleware'] }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
@endsection
