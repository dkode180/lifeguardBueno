@extends('layouts.app')

@section('template_title')
    {{ $paise->name ?? __('Show') . " " . __('Paise') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Paise</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('paises.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre: </strong>
                                    {{ $paise->nombrePais }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha de contrato:</strong>
                                    {{ $paise->caducidadContrato }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Clientes totales en el país:</strong>
                                    {{ $paise->nClientesTotales }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
