@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-5">

			<productos-component></productos-component>
			
		@foreach($productos as $producto)
			<div class="card actions">
				<div class="card-header">
					<h2>
					<a href="/productos/{{ $producto->id }}">{{ $producto->title }}</a>
					</h2>
					<h4>{{ $producto->price }}</h4>
				</div>
				<div class="card-body">
					{{ $producto->description }}
				</div> 
			</div>			
		@endforeach
		<div class="actions text-center">
			{{ $productos->links() }}
		</div>

		</div>
	</div>
</div>
@endsection