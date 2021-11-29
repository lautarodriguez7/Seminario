@extends('adminlte::page')

@section('title', 'USUARIOS')

@section('content_header')
    <h1>Mostrar rol</h1>
@stop

@section('content')
    @livewire('admin.users-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop