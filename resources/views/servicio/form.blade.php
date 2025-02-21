<div class="row padding-1 p-1">
    <div class="col-md-12">

        {{-- <div class="form-group mb-2 mb20">
            <label for="pais_id" class="form-label">{{ __('Pais Id') }}</label>
            <input type="text" name="pais_id" class="form-control @error('pais_id') is-invalid @enderror" value="{{ old('pais_id', $servicio?->pais_id) }}" id="pais_id" placeholder="Pais Id">
            {!! $errors->first('pais_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div> --}}
        <div class="form-group mb-2 mb20">
            <label for="nombre_servicio" class="form-label">{{ __('Nombreservicio') }}</label>
            <input type="text" name="nombreServicio" class="form-control @error('nombreServicio') is-invalid @enderror" value="{{ old('nombreServicio', $servicio?->nombreServicio) }}" id="nombre_servicio" placeholder="Nombreservicio">
            {!! $errors->first('nombreServicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="n_clientes" class="form-label">{{ __('Nclientes') }}</label>
            <input type="text" name="nClientes" class="form-control @error('nClientes') is-invalid @enderror" value="{{ old('nClientes', $servicio?->nClientes) }}" id="n_clientes" placeholder="Nclientes">
            {!! $errors->first('nClientes', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="n_sedes" class="form-label">{{ __('Nsedes') }}</label>
            <input type="text" name="nSedes" class="form-control @error('nSedes') is-invalid @enderror" value="{{ old('nSedes', $servicio?->nSedes) }}" id="n_sedes" placeholder="Nsedes">
            {!! $errors->first('nSedes', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            {{ Form::label('paise') }}
{{ Form::select('pais_id',$paises, $servicio->pais_id, ['class' => 'form-control' . ($errors->has('pais_id') ? ' is-invalid' : ''), 'placeholder' => 'pais_id']) }}
            {!! $errors->first('pais_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
