@extends('layouts.app')

@section('content')
<div class="container">
	<div class="card card-info">
		<div class="card-header">
			<h2>Mi carrito de comprasa</h2>
		</div>
		<div class="card-body">
			<!--@foreach($shopping_cart->productos as 
			$producto)
				<div class="">
					<h4>{{ $producto->title }}</h4>
				</div>
			@endforeach -->
			<div class="row">
				
			<div class="col-md-6">
				<productos-shopping-component></productos-shopping-component>
			</div>
			<div class="col-md-6 payments text-center">
				<p>Paga tu total facilmente con cualquiera de éstos métodos, a través de PayPal </p>
				<img src="/img/mastercard.png" alt="" width="80">
				<img src="/img/visa.png" alt="" width="80">
				<img src="/img/paypal.png" alt="" width="80">
				<hr>
				<div >
					<a href="" class="btn btn-primary"> Proceder al pago</a>
				</div>
			</div>
			
			</div>
		</div> 
	</div>
</div>
	
@endsection
