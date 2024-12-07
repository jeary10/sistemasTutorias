@extends('layouts.app')

@section('template_title', 'Registrar Horario')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ isset($horario) ? route('horarios.update', $horario->id) : route('horarios.store') }}" method="POST">
                @csrf
                @if(isset($horario))
                    @method('PUT')
                @endif
                <div class="form-group mb-3">
                    <label for="tutor_id">Tutor</label>
                    <select class="form-control" name="tutor_id" required>
                        <option value="">Seleccione un tutor</option>
                        @foreach ($tutores as $tutor)
                            <option value="{{ $tutor->id }}" {{ isset($horario) && $horario->tutor_id == $tutor->id ? 'selected' : '' }}>
                                {{ $tutor->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="fecha">Fecha</label>
                    <input type="date" class="form-control" name="fecha" value="{{ $horario->fecha ?? old('fecha') }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="hora_inicio">Hora Inicio</label>
                    <input type="time" class="form-control" name="hora_inicio" value="{{ $horario->hora_inicio ?? old('hora_inicio') }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="hora_fin">Hora Fin</label>
                    <input type="time" class="form-control" name="hora_fin" value="{{ $horario->hora_fin ?? old('hora_fin') }}" required>
                </div>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
