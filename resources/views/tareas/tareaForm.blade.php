@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Nueva Tarea</div>
                <div class="card-body">
                    @if(isset($tarea))
                    <form action="{{ route('tarea.update', $tarea->id) }}" method="POST">
                        @method('PATCH')
                    @else
                    <form action="{{ route('tarea.store') }}" method="POST">
                    @endif
                        @csrf
                        <div class="form-group">
                          <label for="tarea">Tarea</label>
                        <input type="text" class="form-control" id="tarea" name="tarea" placeholder="Ingresa la tarea" value="{{ $tarea->tarea ?? ''}}" required>
                        </div>
                        <div class="form-group">
                          <label for="descripcion">Descripción</label>
                          <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Añade una descripción" > {{ $tarea->descripcion ?? ''}} </textarea>
                        </div>
                        <div class="form-group">
                            <label for="fecha_de_Entrega">Fecha de Entrega</label>
                        <input type="date" class="form-control" id="fecha_entrega" name="Fecha_de_entrega" value="{{ $tarea->fecha_entrega ?? '' }}">
                        </div>
                        <label class="form-group" for="prioridad">Prioridad</label>
                            <select class="form-control" id="prioridad" name="prioridad">
                                <option selected>Selecciona prioridad</option>
                                <option value="1" {{ isset($tarea) && $tarea->prioridad == 1 ? 'selected' : '' }}>Baja(1)</option>
                                <option value="3" {{ isset($tarea) && $tarea->prioridad == 3 ? 'selected' : '' }}>Media(3)</option>
                                <option value="5" {{ isset($tarea) && $tarea->prioridad == 5 ? 'selected' : '' }}>Alta(5)</option>
                            </select>
                            <br>
                      <button type="submit" class="btn btn-outline-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
