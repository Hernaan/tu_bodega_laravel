@extends('layouts.app')
@auth
@section('content')
<div class="text-center">
	<h1>Lista de Productos</h1>
</div>
<div class="container table-responsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<td class="success">ID</td>
				<td class="success">Nombre del Producto</td>
				<td class="success">Descripcion</td>
				<td class="success">Precio</td>
				<td class="success">Acciones</td>
			</tr>
		</thead>
		<tbody>
			@foreach($products as $product)
			<tr>
				<td>{{ $product->id }}</td>
				<td>{{ $product->product_name}}</td>
				<td>{{ $product->description }}</td>
				<td>{{ $product->precio }}</td>
				<td>Acciones</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="absolute text-center">
	<a href="{{ url('/products/create') }}" class="btn btn-primary">
		<i>Agregar nuevo producto</i>
	</a>
</div>
@endsection
@endauth
@guest
	@section('content')
		<div class="alert alert-info">Todavia no estas registrado?</div>
	@endsection   
@endguest