@extends('layouts.app')

@section('content')
<div class="container">
	<div class="card">
		
		<div class="card-header">
			<h4>Editar producto</h4>	
		</div>
		<div class="card-body">
			@include('productos.form')
		</div>
		
	</div>
</div>
@endsection