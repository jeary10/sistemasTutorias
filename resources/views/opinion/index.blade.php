@extends('layouts.app')

@section('template_title')
    {{ __('Opiniones') }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row wrap">
            
            <div class="col-md-2 text-center" style="margin-top: 20px;">
                <img src="{{ asset('img/importancia-reviews.png') }}" alt="Imagen Izquierda" class="img-fluid">
            </div>

            <div class="col-sm-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>Mis Opiniones</h2>
                    <a href="{{ route('opinions.create') }}" class="btn btn-primary btn-lg">
                        {{ __('Crear una nueva opinión') }}
                    </a>
                </div>
                @foreach ($opinions as $opinion)
                    <div class="panel panel-default">
                        <div class="panel-heading">Opinión ID: {{ $opinion->id }}</div>
                        <div class="panel-body">
                            <strong>Calificación:</strong> {{ $opinion->calificacion }}<br>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-warning btn-sm" href="{{ route('opinions.edit', $opinion->id) }}">
                                <span class="glyphicon glyphicon-pencil"></span> Editar
                            </a>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEliminar{{ $opinion->id }}">
                                <span class="glyphicon glyphicon-trash"></span> Eliminar
                            </button>
                        </div>
                    </div>
                    <hr />
                    <!-- Modal de eliminación -->
                    <div class="modal fade" id="modalEliminar{{ $opinion->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $opinion->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel{{ $opinion->id }}">Eliminar Opinión</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ¿Está seguro de que desea eliminar esta opinión?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <form method="POST" action="{{ route('opinions.destroy', $opinion->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-sm-5">
                <h2>Comentarios</h2>
                @foreach ($opinions as $opinion)
                    <div class="panel panel-default">
                        <div class="panel-heading">Opinión ID: {{ $opinion->id }}</div>
                        <div class="panel-body">
                            <strong>Comentarios:</strong> {{ $opinion->comentario }}
                        </div>
                    </div>
                    <hr />
                @endforeach
            </div>

            <!-- Imagen Derecha -->
            <div class="col-md-2 text-center" style="margin-top: 20px;">
                <img src="{{ asset('img/opiniones-clientes.png') }}" alt="Imagen Derecha" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        {{ $opinions->links() }}</div>
    </div>
@endsection

<style>
    .wrap {
        margin-top: 20px;
    }

    .panel {
        margin-bottom: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .panel-heading {
        background-color: #f7f7f7;
        border-bottom: 1px solid #e7e7e7;
    }

    .btn {
        margin: 5px 0;
    }
</style>












