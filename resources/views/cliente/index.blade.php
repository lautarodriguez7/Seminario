@extends('adminlte::page')

@section('title', 'clientes')
  

@section('content')

<h1>Listado de clientes</h1>
@can('articulo.create')
    <a href="clientes/create" class="btn btn-primary m-2">Crear</a>  
@endcan
<table id="clientes" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th class="col">Descripcion</th>
            <th class="col">Estado</th>
            <th class="col">Nombre</th>
            <th class="col">Telefono</th>
            <th class="col">Direccion</th>
            <th class="col">E-mail</th>
            <th class="col">CUIT</th>
            <th class="col">Fecha inicial</th>                

            <th class="col">Trabajo</th>    
            
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{ $cliente->descripcion}}</td>
            <td>{{ $cliente->estado}}</td>
            <td>{{ $cliente->nombre}}</td>
            <td>{{ $cliente->telefono}}</td>
            <td>{{ $cliente->direccion}}</td>
            <td>{{ $cliente->email}}</td>
            <td>{{ $cliente->cuit}}</td>
            <td>{{ $cliente->created_at }}</td>
            

            @if($cliente->trabajo === 0)
            <td class="bg-danger text-center">{{ $cliente->trabajo}}%</td>
            @elseif($cliente->trabajo === 100)
            <td class="bg-success text-center">{{ $cliente->trabajo}}%</td>
            @elseif($cliente->trabajo > 0)
            <td class="bg-warning text-center">{{ $cliente->trabajo}}%</td>
            @endif 

            <td>
            <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
            @can('articulo.create')

            <a href="/clientes/{{$cliente->id}}/edit" class="btn m-1 btn-info">Editar</a>    
            @endcan     
                @csrf
                @method('DELETE')
                @can('articulo.create')

            <button type="submit" class="btn m-1 btn-danger">Delete</button>
            @endcan
            </form>          
            </td>
        </tr>

        @endforeach
    </tbody>
</table>
@stop
@section('css')
<style>
    tr:hover { 
        background-color: rgba(0,0,0,.05); 
    }
</style>
@endsection