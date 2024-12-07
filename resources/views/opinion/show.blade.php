@extends('layouts.app')

@section('template_title')
    {{ $opinion->name ?? __('Ver') . " " . __('Opinion') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Opinion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('opinions.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Session Id:</strong>
                                    {{ $opinion->session_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Calificacion:</strong>
                                    {{ $opinion->calificacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Comentario:</strong>
                                    {{ $opinion->comentario }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
