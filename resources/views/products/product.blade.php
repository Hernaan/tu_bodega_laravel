<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
      <div class="caption">
        <h3>{{ $product->product_name }}</h3>
        <p>{{ $product->description }}</p>
        @include('carrito_products.form', ['product' => $product])
      </div>
    </div>
  </div>
</div>  
