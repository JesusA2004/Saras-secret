<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_pedido" class="form-label">{{ __('Idpedido') }}</label>
            <input type="text" name="idPedido" class="form-control @error('idPedido') is-invalid @enderror" value="{{ old('idPedido', $pago?->idPedido) }}" id="id_pedido" placeholder="Idpedido">
            {!! $errors->first('idPedido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="monto" class="form-label">{{ __('Monto') }}</label>
            <input type="text" name="monto" class="form-control @error('monto') is-invalid @enderror" value="{{ old('monto', $pago?->monto) }}" id="monto" placeholder="Monto">
            {!! $errors->first('monto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="metodo" class="form-label">{{ __('Metodo') }}</label>
            <input type="text" name="metodo" class="form-control @error('metodo') is-invalid @enderror" value="{{ old('metodo', $pago?->metodo) }}" id="metodo" placeholder="Metodo">
            {!! $errors->first('metodo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_transaccion" class="form-label">{{ __('Idtransaccion') }}</label>
            <input type="text" name="idTransaccion" class="form-control @error('idTransaccion') is-invalid @enderror" value="{{ old('idTransaccion', $pago?->idTransaccion) }}" id="id_transaccion" placeholder="Idtransaccion">
            {!! $errors->first('idTransaccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $pago?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>