@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>API Data</h1>
    @if(isset($data))
        <pre>{{ json_encode($data, JSON_PRETTY_PRINT) }}</pre>
    @else
        <p>No hay datos disponibles.</p>
    @endif
@stop


@section('content_header')
    <h1>API Data</h1>
@stop

@section('content')
    @if(isset($data) && count($data) > 0)
        <div class="row">
            @foreach($data as $usuario)
                <div class="col-md-4">
                    <div class="box" style="background-color: #3498db; color: #fff; padding: 15px; margin-bottom: 20px;">
                        <div style="text-align: center; font-size: 48px; margin-bottom: 10px;">
                            <span class="fas fa-users"></span>
                        </div>
                        <div class="box-header">
                            <h3 class="box-title">{{ $usuario['name'] }}</h3>
                        </div>
                        <div class="box-body">
                            <p>Email: {{ $usuario['email'] }}</p>
                            <!-- Puedes mostrar más detalles del usuario aquí -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>No hay datos de usuarios disponibles.</p>
    @endif
@stop

