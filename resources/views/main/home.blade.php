@extends('layouts.app')
@section('title', 'Tu Bodega')
@section('content')
<div class="container">
	<div class="container">
		<div class="container text-center">
			@foreach($products as $product)
				@include('products.product', ['product' => $product])
			@endforeach
		</div>
	</div>
</div>
@endsection