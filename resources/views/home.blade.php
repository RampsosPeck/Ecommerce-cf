@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header  text-center bg-info">PANEL DE CONTROL</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/productos" class="btn btn-info">Ver PRODUCTOS</a>

                     <a href="/productos/create" class="btn btn-primary">Crear PRODUCTO</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
