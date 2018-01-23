@extends('layouts.app')
@section('content')
<div class="container">
	<h1 class="text-center"> Tu Carrito de compras </h1>
	<br>
	<div class="container table-responsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<td class="success">Producto</td>
				<td class="success">Precio</td>
			</tr>
		</thead>
		<tbody>
		@foreach($products as $product)
			<tr>
				<td>{{ $product->product_name }}</td>
				<td>{{ $product->precio }}</td>
			</tr>
		@endforeach
			<tr>
				<td class="danger"><strong>Total</strong></td>
				<td class="danger"><strong>{{ $total }}</strong></td>
			</tr>
			</tbody>
	</table>
	</div>
</div>
<div class="container">
	<a href="{{ url('/') }}">Seguir Comprando</a>
	<div class="pull-right"><input type="submit" class="btn btn-success" value="Realizar pedido"></div>

</div>
@endsection