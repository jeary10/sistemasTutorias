@extends('layouts.app')

@section('template_title')
    {{ __('Sesiones de Tutorías') }}
@endsection

@section('content')
    <div class="container-fluid bg-image">
        <div class="row">
            <div class="col-xs-12 text-center theader free">
                <div class="ptitle">Sesiones de Tutorías</div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="pprice">Total: {{ $sessionTutorias->count() }}</div>
                    <a href="{{ route('session-tutorias.create') }}" class="btn btn-lg btn-danger">Crear Nueva Sesión</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success m-4">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="row">
            @foreach ($sessionTutorias as $sessionTutoria)
                <div class="col-xs-12 col-sm-6 col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $sessionTutoria->materia }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $sessionTutoria->fecha }} - {{ $sessionTutoria->hora }}</h6>
                            <p class="card-text">
                                {{ __('Tutor:') }} {{ $sessionTutoria->tutor_id }}<br>
                                {{ __('Estudiante:') }} {{ $sessionTutoria->estudiante_id }}<br>
                                {{ __('Estado:') }} {{ $sessionTutoria->estado }}
                            </p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-success" href="{{ route('session-tutorias.show', $sessionTutoria->id) }}">{{ __('Ver') }}</a>
                                <a class="btn btn-warning" href="{{ route('session-tutorias.edit', $sessionTutoria->id) }}">{{ __('Editar') }}</a>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEliminar1{{ $sessionTutoria->id }}">
                                    Eliminar
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal de eliminación -->
                    <div class="modal fade" id="modalEliminar1{{ $sessionTutoria->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $sessionTutoria->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel{{ $sessionTutoria->id }}">{{ __('Eliminar Sesión de Tutoría') }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{ __('¿Está seguro de que desea eliminar la sesión de tutoría de la materia ') }}<strong>{{ $sessionTutoria->materia }}</strong>?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Cancelar') }}</button>
                                    <form method="POST" action="{{ route('session-tutorias.destroy', $sessionTutoria->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">{{ __('Eliminar') }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $sessionTutorias->links() }}
        </div>
        
    </div>
@endsection

<style>
    body,
    html {
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
