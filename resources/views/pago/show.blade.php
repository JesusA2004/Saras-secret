@extends('layouts.app')

@section('template_title')
    {{ $pago->name ?? __('Show') . " " . __('Pago') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('pagos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Idpedido:</strong>
                                    {{ $pago->idPedido }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Monto:</strong>
                                    {{ $pago->monto }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Metodo:</strong>
                                    {{ $pago->metodo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Idtransaccion:</strong>
                                    {{ $pago->idTransaccion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $pago->estado }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
