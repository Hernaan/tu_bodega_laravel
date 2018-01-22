@extends('layouts.app')
@auth
@section('content')
<div class="container">
	<h1>Modificar Producto</h1>
	@include('products.form',['product' => $product, 'url' => '/products/'.$product->id, 'method' => 'PATCH'])
</div>

@endsection
@endauth
@guest
	@section('content')
		<div class="alert alert-info">Todavia no estas registrado?</div>
	@endsection   
@endguest