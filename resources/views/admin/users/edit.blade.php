@extends('adminlte::page')

@section('title', 'Editar USUARIO')

@section('content_header')
    <h1>Asignar un rol</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-boddy">
            <p class="h5">Nombre:</p>
            <p class="form-control">{{$user->name}}</p>
        </div>
        <h2 class="h5 m-1">Lista de Roles</h2>
        {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
            @foreach ($roles as $role)
                <div>
                    <label class='m-2'>
                        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                            {{ $role->name }}
                    </label>
                </div>
            @endforeach

                {!! Form::submit('Asignar rol', ['class' => ' m-1 btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop