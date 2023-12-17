@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Tablero</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">

            <div class="info-box shadow" style="height: 200px;">
                <span class="info-box-icon bg-success" style="font-size: 2.5rem;"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text" style="font-size: 1.5rem;">Clientes</span>
                    <span class="info-box-number" style="font-size: 2rem;">{{ $totales['clients'] }}</span>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="info-box shadow" style="height: 200px;">
                <span class="info-box-icon bg-primary" style="font-size: 2.5rem;"><i class="fas fa-list"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text" style="font-size: 1.5rem;">Productos</span>
                    <span class="info-box-number" style="font-size: 2rem;">{{ $totales['products'] }}</span>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="info-box shadow" style="height: 200px;">
                <span class="info-box-icon bg-warning" style="font-size: 2.5rem;"><i class="fas fa-tags"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text" style="font-size: 1.5rem;">Categorias</span>
                    <span class="info-box-number" style="font-size: 2rem;">{{ $totales['categories'] }}</span>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="info-box shadow" style="height: 200px;">
                <span class="info-box-icon bg-info" style="font-size: 2.5rem;"><i class="fas fa-cash-register"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text" style="font-size: 1.5rem;">Ventas</span>
                    <span class="info-box-number" style="font-size: 2rem;">{{ $totales['sales'] }}</span>
                </div>
            </div>
        </div>
    </div>
@stop


