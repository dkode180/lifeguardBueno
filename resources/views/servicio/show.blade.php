@extends('layouts.app')

@section('template_title')
    {{ $servicio->name ?? __('Show') . " " . __('Servicio') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Servicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('servicios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Pais Id:</strong>
                                    {{ $servicio->pais_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Pais:</strong>
                                    {{ $servicio->paise->nombrePais }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombreservicio:</strong>
                                    {{ $servicio->nombreServicio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nclientes:</strong>
                                    {{ $servicio->nClientes }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nsedes:</strong>
                                    {{ $servicio->nSedes }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
