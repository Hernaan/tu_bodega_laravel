{!! Form::open(['url' => $url, 'method' => $method ]) !!}
	@foreach ($errors->all() as $error)
	<p class="alert alert-danger">{{ $error }}</p>
	@endforeach
	<div class="form-group">
		{{ Form::text('product_name', $product->product_name,['class' => 'form-control', 'placeholder' => 'Nombre del producto']) }}
	</div>
	<div class="form-group">
		{{ Form::textarea('description', $product->description,['class' => 'form-control', 'placeholder' => 'Descripcion del Producto']) }}
	</div>
	<div class="form-group">
		{{ Form::number('precio', $product->precio,['class' => 'form-control', 'placeholder' => 'Precio del producto']) }}
	</div>
	<div class="form-group">
  		<div class="col-md-4">
  			<a href="{{ url('/products') }}"><span class="glyphicon glyphicon-arrow-left"></span> Ir a listado de productos</a>
  		</div>
  		<div class="inout-gruop">
  			<div class="col-md-4 col-md-offset-4">
  				<input type="submit" value="Agregar" class="btn btn-success">
        		
    		</span>
  			</div>
  		</div>
	</div>

{!! Form::close() !!}