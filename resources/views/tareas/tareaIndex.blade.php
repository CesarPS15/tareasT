@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de Tareas</div>
                <div class="card-body">
                    <a href="{{ action('TareaController@create') }}"class="btn btn-outline-primary">Nueva Tarea</a>
                    <hr>
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Tarea</th>
                            <th>Descripcion</th>
                            <th>Fecha de Entrega</th>
                            <th>Prioridad</th>
                            <th>Categoria</th>
                            <th>Usuario</th>
                        </tr>
                        @foreach($tareas as $tarea)
                        <tr>
                            <th>{{$tarea->id}}</th>
                        <th>
                            <a href="{{route('tarea.show', $tarea->id)}}">{{$tarea->tarea}} </a>
                        </th>
                            <th>{{$tarea->descripcion}}</th>
                            <th>{{$tarea->fecha_entrega}}</th>
                            <th>{{$tarea->prioridad}}</th>
                            <th>{{$tarea->categoria->nombre}}</th>
                            <th>{{$tarea->user->name}}<br>
                            </th>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
