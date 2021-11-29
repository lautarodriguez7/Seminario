@extends('adminlte::page')

@section('title', 'USUARIOS')

@section('content_header')
<a href="{{route('admin.roles.create')}}" class="btn btn-success btn-sm float-right">CREAR ROL </a>
    <h1>Lista de Roles</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td width="1em">
                                <a href="{{route('admin.roles.edit', $role)}}" class="btn btn-primary btn-sm">EDITAR</a>
                            </td>
                            <td width="1em">
                                <form action="{{route('admin.roles.destroy', $role)}}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="" class="btn btn-danger btn-sm">ELIMINAR</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> 
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop