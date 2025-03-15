<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="sesion_id" class="form-label">{{ __('Sesion Id') }}</label>
            <input type="text" name="sesion_id" class="form-control @error('sesion_id') is-invalid @enderror" value="{{ old('sesion_id', $carrito?->sesion_id) }}" id="sesion_id" placeholder="Sesion Id">
            {!! $errors->first('sesion_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_cliente" class="form-label">{{ __('Idcliente') }}</label>
            <input type="text" name="idCliente" class="form-control @error('idCliente') is-invalid @enderror" value="{{ old('idCliente', $carrito?->idCliente) }}" id="id_cliente" placeholder="Idcliente">
            {!! $errors->first('idCliente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>