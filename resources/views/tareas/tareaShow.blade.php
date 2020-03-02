@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalle de Tarea</div>
                <div class="card-body">
                    <a href="{{ route('tarea.edit', $tarea->id) }}"class="btn btn-outline-warning">Editar tarea</a>
                    <hr>
                    <form action="{{ route('tarea.destroy', $tarea->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Borrar</button>
                    </form>

                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Tarea</th>
                            <th>Descripcion</th>
                            <th>Fecha de Entrega</th>
                            <th>Prioridad</th>
                        </tr>
                        <tr>
                            <th>{{$tarea->id}}</th>
                            <th>{{$tarea->tarea}}</th>
                            <th>{{$tarea->descripcion}}</th>
                            <th>{{$tarea->fecha_entrega}}</th>
                            <th>{{$tarea->prioridad}}</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
