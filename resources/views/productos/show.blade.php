@extends('layouts.app')

@section('content')
	<div class="row justify-content-sm-center">
		<div class="col-xs-12 col-sm-10 col-md-7 col-lg-6">
			<div class="card">
				<div class="card-header">
					<h1>{{ $producto->title }}</h1>
				</div>
				<div class="card-body">
					
					<p>{{ $producto->price }}</p>
					<p>{{ $producto->description }}</p>
					
				</div>
				<div class="card-footer">
					<!--{!! Form::open(['method' => 'POST' , 'url' => '/in_shopping_carts']) !!}
						
						<input type="hidden" name="producto_id" value="{{ $producto->id }}">

					<input type="submit" class="btn btn-success" value="Agregar al carrito">

					{!! Form::close() !!} -->

					<add-producto-btn :producto='{!! json_encode($producto) !!}' ></add-producto-btn>
					 
					@include('productos.delete')
				</div>
			</div>
		</div>
	</div>
@endsection