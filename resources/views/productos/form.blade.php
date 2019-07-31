{!! Form::open(['route'=>[$producto->url(), $producto->id],'method'=>$producto->method() ,'class'=>'app-form']) !!}
<div>
	{!! Form::label('title','Título del producto')  !!}
	{!! Form::text('title',$producto->title,['class'=>'form-control']) !!}
</div>
<div>
	{!! Form::label('description','Descripción del producto')  !!}
	{!! Form::textarea('description',$producto->description,['class'=>'form-control']) !!}
</div>
<div>
	{!! Form::label('price','Precio del producto')  !!}
	{!! Form::number('price',$producto->price,['class'=>'form-control']) !!}
</div>

<div>
	<input type="submit" value="Guardar" class="btn btn-success">	
</div>

{!! Form::close() !!}
