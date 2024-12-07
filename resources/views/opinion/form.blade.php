<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="session_id" class="form-label">{{ __('Session Id') }}</label>
            <input type="text" name="session_id" class="form-control @error('session_id') is-invalid @enderror" value="{{ old('session_id', $opinion?->session_id) }}" id="session_id" placeholder="Session Id">
            {!! $errors->first('session_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="calificacion" class="form-label">{{ __('Calificacion') }}</label>
            <input type="text" name="calificacion" class="form-control @error('calificacion') is-invalid @enderror" value="{{ old('calificacion', $opinion?->calificacion) }}" id="calificacion" placeholder="Calificacion">
            {!! $errors->first('calificacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="comentario" class="form-label">{{ __('Comentario') }}</label>
            <input type="text" name="comentario" class="form-control @error('comentario') is-invalid @enderror" value="{{ old('comentario', $opinion?->comentario) }}" id="comentario" placeholder="Comentario">
            {!! $errors->first('comentario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Actualizar') }}</button>
        <a href="{{ route('opinions.index') }}" class="btn btn-danger btn-sm">Volver</a>
    </div>
</div>