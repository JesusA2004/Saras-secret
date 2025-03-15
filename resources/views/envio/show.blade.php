@extends('layouts.app')

@section('template_title')
    {{ $envio->name ?? __('Show') . " " . __('Envio') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Envio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('envios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Idpedido:</strong>
                                    {{ $envio->idPedido }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Numseguimiento:</strong>
                                    {{ $envio->numSeguimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Transportista:</strong>
                                    {{ $envio->transportista }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $envio->estado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechaentrega:</strong>
                                    {{ $envio->fechaEntrega }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
