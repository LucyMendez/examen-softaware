@extends('adminlte::page')

@section('title', 'Editar Empleado')

@section('content_header')
    <h1>Empleado</h1>
@stop

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $empleado->nombre }}">
                    </div>
                    <div class="form-group">
                        <label for="paterno">Paterno:</label>
                        <input type="text" class="form-control" name="paterno" id="paterno" value="{{ $empleado->paterno }}">
                    </div>
                    <div class="form-group">
                        <label for="materno">Materno:</label>
                        <input type="text" class="form-control" name="materno" id="materno" value="{{ $empleado->materno }}">
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad:</label>
                        <input type="number" class="form-control" name="edad" id="edad" value="{{ $empleado->edad }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ $empleado->email }}">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" value="{{ $empleado->telefono }}">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" value="{{ $empleado->direccion }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
            <a href="{{ route('empleados.index') }}" class="btn btn-secondary mb-3">Volver a la lista de empleados</a>
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
