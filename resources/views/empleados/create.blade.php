@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Empleados</h1>
@stop

@section('content')
    <div class="container">
        <h1>Empleado</h1>
        <a href="{{ route('empleados.index') }}" class="btn btn-secondary mb-3">Volver a la lista de empleados</a>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('empleados.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}">
            </div>
            <div class="form-group">
                <label for="paterno">Paterno:</label>
                <input type="text" class="form-control" name="paterno" id="paterno" value="{{ old('paterno') }}">
            </div>
            <div class="form-group">
                <label for="materno">Materno:</label>
                <input type="text" class="form-control" name="materno" id="materno" value="{{ old('materno') }}">
            </div>
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" class="form-control" name="edad" id="edad" value="{{ old('edad') }}">
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" class="form-control" name="telefono" id="telefono" value="{{ old('telefono') }}">
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" name="direccion" id="direccion" value="{{ old('direccion') }}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
