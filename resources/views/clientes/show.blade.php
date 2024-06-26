@extends('adminlte::page')

@section('title', 'detalle de clientes')

@section('content_header')
    <h1>Detalles del Cliente</h1>
@stop
@section('content')
        
<div class="container">
        <h2>Cliente</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $cliente->nombre }} {{ $cliente->apellido }}</h5>
                <p class="card-text"><strong>Email:</strong> {{ $cliente->email }}</p>
                <p class="card-text"><strong>Teléfono:</strong> {{ $cliente->telefono ?: 'N/A' }}</p>
                <p class="card-text"><strong>Dirección:</strong> {{ $cliente->direccion ?: 'N/A' }}</p>
                <p class="card-text"><strong>Fecha de Nacimiento:</strong> {{ $cliente->fecha_nacimiento ?: 'N/A' }}</p>
                <p class="card-text"><strong>Ciudad:</strong> {{ $cliente->ciudad ?: 'N/A' }}</p>
                <p class="card-text"><strong>Código Postal:</strong> {{ $cliente->codigo_postal ?: 'N/A' }}</p>
                <a href="{{ route('clientes.index') }}" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
@endsection

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
