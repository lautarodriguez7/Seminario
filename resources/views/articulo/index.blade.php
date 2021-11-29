@extends('adminlte::page')

@section('title', 'Articulos')

@section('content_header')
    <h1>Listado de Articulos</h1>
@stop

@section('content')
@can('articulo.create')
    <a href="articulos/create" class="btn btn-primary m-2">Crear</a>    
@endcan

<table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th class="col">ID</th>
            <th class="col">Codigo</th>
            <th class="col">Descripcion</th>
            <th class="col">Cantidad</th>
            <th class="col">Precio</th>
            <th class="col">Acciones</th>                
        </tr>
    </thead>
    <tbody>
        @foreach($articulos as $articulo)
        <tr>
            <td>{{ $articulo->id}}</td>
            <td>{{ $articulo->codigo}}</td>
            <td>{{ $articulo->descripcion}}</td>
            <td>{{ $articulo->cantidad }}</td>
            <td>{{ $articulo->precio}}</td>
            <td>
                <form action="{{ route('articulos.destroy',$articulo->id) }}" method="POST">

                    @can('articulo.create')
                        <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info m-1">Editar</a>         
                    @endcan
                        @csrf
                        @method('DELETE')
                    @can('articulo.create')
                    <button type="submit" class="btn btn-danger m-1">Borrar</button>

                    @endcan
                   </form>          
            </td>
        </tr>

        @endforeach
    </tbody>
</table>@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#articulos').DataTable({
                "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
            });
        } );
    </script>
@stop