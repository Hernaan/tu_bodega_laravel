@extends('layouts.app')
@auth
@section('content')
<div class="container">
	<h1>Agregar nuevo producto</h1>

	{!! Form::open(['url'=>'/products', 'method'=>'POST']) !!}
	@foreach ($errors->all() as $error)
	<p class="alert alert-danger">{{ $error }}</p>
	@endforeach
	<div class="form-group">
		{{ Form::text('product_name','',['class' => 'form-control', 'placeholder' => 'Nombre del producto']) }}
	</div>
	<div class="form-group">
		{{ Form::textarea('description','',['class' => 'form-control', 'placeholder' => 'Descripcion del Producto']) }}
	</div>
	<div class="form-group">
		{{ Form::number('precio','',['class' => 'form-control', 'placeholder' => 'Precio del producto']) }}
	</div>
	<div class="form-group">
  		<div class="col-md-4">
  			<a href="{{ url('/products') }}"> Ir a listado de productos</a>
  		</div>
  		<div class="col-md-4 col-md-offset-4">
  			<input type="submit" value="Agregar" class="btn btn-success">
  		</div>
	</div>

	{!! Form::close() !!}
</div>

@endsection
@endauth
@guest
	@section('content')
		<div class="alert alert-info">Todavia no estas registrado?</div>
	@endsection   
@endguest