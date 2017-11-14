@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Elige el paquete que prefieras para darle de comer a tus mariposas</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="comida">
                        Paquete Standard
                        <div class="imag" id="i1">80€</div>
                        <button class="btn btn-lg btn-block">Comprar</button>
                    </div>
                        <div class="comida">
                            Paquete Premium
                            <div class="imag" id="i2">150€</div>
                            <button class="btn btn-lg btn-block">Comprar</button>
                        </div>
                        <div class="comida">
                            Comida Premium Plus
                            <div class="imag" id="i3">500€</div>
                            <button class="btn btn-lg btn-block">Comprar</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
