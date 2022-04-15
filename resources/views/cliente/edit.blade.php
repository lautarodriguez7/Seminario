@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
@stop

@section('content')
    <h2>EDITAR REGISTRO</h2>
    <form action="/clientes/{{$cliente->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input type="text" value="{{$cliente->descripcion}}" id='descripcion' name='descripcion' placeholder="Descripcion del problema" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Estado</label>
            <input type="text" value="{{$cliente->estado}}" id='estado' name='estado' placeholder="estado" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text" value="{{$cliente->nombre}}" id='nombre' name='nombre' placeholder="Nombre" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input type="text" value="{{$cliente->telefono}}" id='telefono' name='telefono' placeholder="telefono" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Direccion</label>
            <input type="text" value="{{$cliente->direccion}}" id='direccion' name='direccion' placeholder="Direccion" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">E-mail</label>
            <input type="text" value="{{$cliente->email}}" id='email' name='email' placeholder="E-mail" class="form-control" tabindex="4">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">CUIT</label>
            <input type="number" value="{{$cliente->cuit}}" id='cuit' name='cuit' placeholder="CUIT" class="form-control" tabindex="5">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Trabajo</label>
            <input type="number" value="{{$cliente->trabajo}}" id='trabajo' name='trabajo' placeholder="Trabajo realizado (%0 - %100)" class="form-control" tabindex="6">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">created_at</label>
            <input type="number" value="{{$cliente->created_at}}" id='created_at' name='created_at' placeholder="created_at realizado (%0 - %100)" class="form-control" tabindex="6">
        </div>
        <a href="/clientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
