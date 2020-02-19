@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Vista de Prueba</div>

                <div class="card-body">
                    Su nombre es {{ $nombre }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
