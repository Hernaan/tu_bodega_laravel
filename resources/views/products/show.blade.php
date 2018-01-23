@extends('layouts.app')
@section('content')
<div class="container">
	<div class="jumbotron">
  		<h1 class="display-3">{{ $product->product_name }}</h1>
  		<p class="lead"></p>
  		<hr class="my-4">
  		<p>{{ $product->description }}</p>
  		<p class="lead">
  			@include('carrito_products.form', ['product' => $product])
  		</p>
	</div>
</div>
	
@endsection