@extends('layouts.app')

@section('template_title', 'Horarios')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('horarios.create') }}" class="btn btn-primary mb-3">Registrar Horario</a>
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>Tutor</th>
                        <th>Fecha</th>
                        <th>Hora Inicio</th>
                        <th>Hora Fin</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($horarios as $horario)
                        <tr>
                            <td>{{ $horario->tutor->nombre }}</td>
                            <td>{{ $horario->fecha }}</td>
                            <td>{{ $horario->hora_inicio }}</td>
                            <td>{{ $horario->hora_fin }}</td>
                            <td>
                                <a href="{{ route('horarios.edit', $horario->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('horarios.destroy', $horario->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este horario?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $horarios->links() !!}
        </div>
    </div>
</div>
@endsection
