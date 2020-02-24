@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de Tareas</div>
                <div class="card-body">
                  <a href="{{ action('TareaController@create') }}"class="btn btn-outline-danger">Nueva Tarea</a>
                  <hr>
                    Mostrar Listado
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
