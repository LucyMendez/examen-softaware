@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Detalles del Empleado</h1>
@stop

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Empleado</h3>
                <a href="{{ route('empleados.index') }}" class="btn btn-secondary mb-3">Volver a la lista de empleados</a>
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> {{ $empleado->id }}</p>
                <p><strong>Nombre:</strong> {{ $empleado->nombre }}</p>
                <p><strong>Paterno:</strong> {{ $empleado->paterno }}</p>
                <p><strong>Materno:</strong> {{ $empleado->materno }}</p>
                <p><strong>Email:</strong> {{ $empleado->email }}</p>
                <p><strong>Teléfono:</strong> {{ $empleado->telefono }}</p>
                <p><strong>Dirección:</strong> {{ $empleado->direccion }}</p>
                <a href="{{ route('empleados.index') }}" class="btn btn-primary">Volver a la lista</a>
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
