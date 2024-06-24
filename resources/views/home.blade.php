@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Presentacion</h1>
@stop

@section('content')
    <h1>Lucy Mendez Martinez</h1>
    <h2>registro:</h2>
    <h3>214090280</h3>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop