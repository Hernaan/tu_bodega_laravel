@extends('layouts.app')
@section('content')
<div class="container">
	<div class="jumbotron">
  		<h1 class="display-3">{{ $product->product_name }}</h1>
  		<p class="lead"></p>
  		<hr class="my-4">
  		<p>{{ $product->description }}</p>
  		<p class="lead">
  			<a class="btn btn-success btn-lg" href="#" role="button">Agregar al carrito</a>
  		</p>
	</div>
</div>
	
@endsection