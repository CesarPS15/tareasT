@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Nueva Tarea</div>
                <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(isset($tarea))
                    {!! Form::model($tarea,['route'=> ['tarea.update', $tarea->id], 'method' => 'PATCH']) !!}
                    @else
                        {!! Form::open(['route' => 'tarea.store']) !!}
                    @endif
                        <div class="form-group">
                            {!! Form::label('tarea', 'Tarea')!!}
                          {!! Form::text('tarea',null,['class' => 'form-control', 'id' => 'tarea', 'required', 'placeholder'=>'Ingresa la tarea'] )!!}
                        {{ $errors->first('tarea') }}
                        </div>
                        <div class="form-group">
                          <label for="descripcion">Descripción</label>
                          {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => '5', 'id'=> 'descripcion', 'placeholder' => 'Añade una descripción']) !!}
                          {{ $errors->first('descripcion') }}
                        </div>
                        <div class="form-group">
                            <label for="fecha_de_Entrega">Fecha de Entrega</label>
                            {!! Form::date('fecha_entrega', null, ['class' => 'form-control'])!!}
                            {{ $errors->first('fecha_entrega') }}
                        </div>
                        <label class="form-group" for="prioridad">Prioridad</label>
                        {!! Form::select('prioridad',['1' => 'Baja', '3' => 'Media', '5'=> 'Alta'],null, ['class' => 'form-control']) !!}
                            {{ $errors->first('prioridad') }}
                            <br>
                            {!! Form::submit('Guardar',['class' => 'btn btn-outline-primary'])!!}
                      {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
