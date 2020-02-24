@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Nueva Tarea</div>
                <div class="card-body">
                      <form>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="tarea">Tarea</label>
                          <input type="text" class="form-control" id="tarea" name="tarea">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="descripcion">Descripcion</label>
                          <input type="textarea" class="form-control" id="inputPassword4">
                        </div>
                      </div>

                      <button type="submit" class="btn btn-primary">Crear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
