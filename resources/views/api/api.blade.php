@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Api</h1>
    <div class="container"h1>
        @if(isset($mensaje))
            <p>Mensaje desde FastAPI: {{ $mensaje }}</p>
        @endif
    </div>
@stop

@section('content')
