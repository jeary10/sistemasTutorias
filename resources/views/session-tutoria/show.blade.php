@extends('layouts.app')

@section('template_title')
    {{ $sessionTutoria->name ?? __('Ver') . " " . __('Tutoria') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Tutoria</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('session-tutorias.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Tutor Id:</strong>
                                    {{ $sessionTutoria->tutor_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estudiante Id:</strong>
                                    {{ $sessionTutoria->estudiante_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Materia:</strong>
                                    {{ $sessionTutoria->materia }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $sessionTutoria->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hora:</strong>
                                    {{ $sessionTutoria->hora }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $sessionTutoria->estado }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
