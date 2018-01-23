{!! Form::open(['url' => '/in_carrito_products', 'method' => 'POST']) !!}
	<input type="hidden" name="product_id" value="{{ $product->id }}">
	<input type="submit" value="Agregar al carrito" class="btn btn-success">

{!! Form::close() !!}