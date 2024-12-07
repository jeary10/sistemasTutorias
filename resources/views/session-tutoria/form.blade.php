<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="tutor_id" class="form-label">{{ __('Tutor Id') }}</label>
            <input type="text" name="tutor_id" class="form-control @error('tutor_id') is-invalid @enderror" value="{{ old('tutor_id', $sessionTutoria?->tutor_id) }}" id="tutor_id" placeholder="Tutor Id">
            {!! $errors->first('tutor_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estudiante_id" class="form-label">{{ __('Estudiante Id') }}</label>
            <input type="text" name="estudiante_id" class="form-control @error('estudiante_id') is-invalid @enderror" value="{{ old('estudiante_id', $sessionTutoria?->estudiante_id) }}" id="estudiante_id" placeholder="Estudiante Id">
            {!! $errors->first('estudiante_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="materia" class="form-label">{{ __('Materia') }}</label>
            <input type="text" name="materia" class="form-control @error('materia') is-invalid @enderror" value="{{ old('materia', $sessionTutoria?->materia) }}" id="materia" placeholder="Materia">
            {!! $errors->first('materia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $sessionTutoria?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hora" class="form-label">{{ __('Hora') }}</label>
            <input type="text" name="hora" class="form-control @error('hora') is-invalid @enderror" value="{{ old('hora', $sessionTutoria?->hora) }}" id="hora" placeholder="Hora">
            {!! $errors->first('hora', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $sessionTutoria?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Actualizar') }}</button>
        <a href="{{ route('session-tutorias.index') }}" class="btn btn-danger btn-sm">Volver</a>
    </div>
</div>