@extends('layouts.app')

@section('template_title')
    Usuarios
@endsection

@section('content')
    <div class="container-fluid bg-image">
        <div class="row">
            <div class="col-xs-12 text-center theader free">
                <div class="ptitle">Usuarios</div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="pprice">Total: {{ $usuarios->count() }}</div>
                    <a href="{{ route('usuarios.create') }}" class="btn btn-lg btn-danger">Crear nuevo</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success m-4">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="row">
            @foreach ($usuarios as $usuario)
                <div class="col-xs-12 col-sm-6 col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $usuario->nombre }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $usuario->email }}</h6>
                            <p class="card-text">Rol: {{ $usuario->rol }}</p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-success" href="{{ route('usuarios.show', $usuario->id) }}">{{ __('Ver') }}</a>
                                <a class="btn btn-warning" href="{{ route('usuarios.edit', $usuario->id) }}">{{ __('Editar') }}</a>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEliminarNuevo{{ $usuario->id }}">
                                    <span class="glyphicon glyphicon-trash"></span> Eliminar
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <!-- Modal de eliminación -->
                    <div class="modal fade" id="modalEliminarNuevo{{ $usuario->id }}" tabindex="-1" aria-labelledby="modalLabelNuevo{{ $usuario->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content modal-dialog-centered">
                                <div class="modal-header">

                                     <h5 class="modal-title" id="modalLabelNuevo{{ $usuario->id }}">Confirmar Eliminación</h5>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center ">
                                        <p>¿Está seguro de que desea eliminar al usuario <strong>{{ $usuario->nombre }}</strong>? Esta acción no se puede deshacer.</p>
                                 </div>
                                 <div class="d-flex justify-content-center">
                                    <span class="badge bg-warning text-dark p-2">¡Atención!</span>
                                 </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <form method="POST" action="{{ route('usuarios.destroy', $usuario->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center">
            {{ $usuarios->links() }}
        </div>
    </div>
@endsection

<style>
    body, html {
        margin: 0;
        padding: 0;
        height: 100%;
    }

    .bg-image {
        background-image: url('img/im.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        padding: 20px;
    }

    .theader {
        text-align: center;
        color: white;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .ptitle {
        font-size: 28px;
        font-weight: bold;
    }

    .pprice {
        font-size: 20px;
        font-weight: bold;
        padding: 10px;
    }

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .btn {
        margin: 5px 0;
        border-radius: 5px;
    }

    .btn-success {
        background-color: #28a745;
    }

    .btn-warning {
        background-color: #ffc107;
    }

    .btn-danger {
        background-color: #dc3545;
    }
</style>
