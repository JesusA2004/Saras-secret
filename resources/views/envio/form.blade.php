<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_pedido" class="form-label">{{ __('Idpedido') }}</label>
            <input type="text" name="idPedido" class="form-control @error('idPedido') is-invalid @enderror" value="{{ old('idPedido', $envio?->idPedido) }}" id="id_pedido" placeholder="Idpedido">
            {!! $errors->first('idPedido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="num_seguimiento" class="form-label">{{ __('Numseguimiento') }}</label>
            <input type="text" name="numSeguimiento" class="form-control @error('numSeguimiento') is-invalid @enderror" value="{{ old('numSeguimiento', $envio?->numSeguimiento) }}" id="num_seguimiento" placeholder="Numseguimiento">
            {!! $errors->first('numSeguimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="transportista" class="form-label">{{ __('Transportista') }}</label>
            <input type="text" name="transportista" class="form-control @error('transportista') is-invalid @enderror" value="{{ old('transportista', $envio?->transportista) }}" id="transportista" placeholder="Transportista">
            {!! $errors->first('transportista', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $envio?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_entrega" class="form-label">{{ __('Fechaentrega') }}</label>
            <input type="text" name="fechaEntrega" class="form-control @error('fechaEntrega') is-invalid @enderror" value="{{ old('fechaEntrega', $envio?->fechaEntrega) }}" id="fecha_entrega" placeholder="Fechaentrega">
            {!! $errors->first('fechaEntrega', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>