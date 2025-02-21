<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_pais" class="form-label">{{ __('Nombrepais') }}</label>
            <input type="text" name="nombrePais" class="form-control @error('nombrePais') is-invalid @enderror" value="{{ old('nombrePais', $paise?->nombrePais) }}" id="nombre_pais" placeholder="Nombrepais">
            {!! $errors->first('nombrePais', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="caducidad_contrato" class="form-label">{{ __('Caducidadcontrato') }}</label>
            <input type="text" name="caducidadContrato" class="form-control @error('caducidadContrato') is-invalid @enderror" value="{{ old('caducidadContrato', $paise?->caducidadContrato) }}" id="caducidad_contrato" placeholder="Caducidadcontrato">
            {!! $errors->first('caducidadContrato', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="n_clientes_totales" class="form-label">{{ __('Nclientestotales') }}</label>
            <input type="text" name="nClientesTotales" class="form-control @error('nClientesTotales') is-invalid @enderror" value="{{ old('nClientesTotales', $paise?->nClientesTotales) }}" id="n_clientes_totales" placeholder="Nclientestotales">
            {!! $errors->first('nClientesTotales', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>